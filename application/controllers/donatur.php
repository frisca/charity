<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Donatur extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('all_model');
	}

	public function index()
	{
		$condition = array('role' => 1);
		$data['donatur'] = $this->all_model->getDataByCondition('user', $condition)->result();
		$this->load->view('donatur/index', $data);
	}

	public function add(){
		$this->load->view('donatur/add');
	}

	public function processAdd(){
		$user = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'phone' => $this->input->post('phone'),
			'joinDate' => date('Y-m-d', strtotime(strtr($this->input->post('joinDate'), '/', '-'))),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
			'role' => 2,
			'username' => $this->input->post('username')
		);

		$res_user = $this->all_model->insertData('user', $user);
		if($res_user == false){
			$this->session->set_flashdata('error', 'Data donatur gagal disimpan');
			return redirect(base_url() . 'donatur/add');
		}
		$users = $this->all_model->getDataByLimit('user', 'idUser', 'desc', 1)->row();
		$donatur = array(
			'angkatan' => $this->input->post('angkatan'),
			'jenisKeanggotaan' => $this->input->post('jenisKeanggotan'),
			'gender' => $this->input->post('gender'),
			'birthDate' => date('Y-m-d', strtotime(strtr($this->input->post('birthDate'), '/', '-'))),
			'id_user' => $users->idUser
		);
		$res = $this->all_model->insertData('donatur', $donatur);
		if($res == false){
			$this->session->set_flashdata('error', 'Data donatur gagal disimpan');
			return redirect(base_url() . 'donatur/add');
		}
		$this->session->set_flashdata('success', 'Data donatur berhasil disimpan');
		return redirect(base_url() . 'donatur/index');
	}

	public function views($id)
	{
		$con_user = array('idUser' => $id);
		$con_donatur = array('id_user' => $id);
		$data['user'] = $this->all_model->getDataByCondition('user', $con_user)->row();
		$data['donatur'] = $this->all_model->getDataByCondition('donatur', $con_donatur)->row();
		$this->load->view('donatur/view', $data);
	}

	public function edit($id){
		$con_user = array('idUser' => $id);
		$con_donatur = array('id_user' => $id);
		$data['user'] = $this->all_model->getDataByCondition('user', $con_user)->row();
		$data['donatur'] = $this->all_model->getDataByCondition('donatur', $con_donatur)->row();
		$this->load->view('donatur/edit', $data);
	}

	public function processEdit($id){
		$con_user = array('idUser' => $id);
		$data_user = $this->all_model->getDataByCondition('user', $con_user)->row();
		$user = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'phone' => $this->input->post('phone'),
			'joinDate' => date('Y-m-d', strtotime(strtr($this->input->post('joinDate'), '/', '-'))),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password') == "" ? $data_user->password : md5($this->input->post('password')),
			'username' => $this->input->post('username')
		);

		$res_user = $this->all_model->updateData('user', $con_user, $user);
		if($res_user == false){
			$this->session->set_flashdata('error', 'Data donatur gagal disimpan');
			return redirect(base_url() . 'donatur/edit/' . $id);
		}

		$con_donatur = array('id_user' => $id);
		$donatur = array(
			'angkatan' => $this->input->post('angkatan'),
			'jenisKeanggotaan' => $this->input->post('jenisKeanggotan'),
			'gender' => $this->input->post('gender'),
			'birthDate' => date('Y-m-d', strtotime(strtr($this->input->post('birthDate'), '/', '-')))
		);

		$res = $this->all_model->updateData('donatur', $con_donatur, $donatur);
		if($res == false){
			$this->session->set_flashdata('error', 'Data donatur gagal disimpan');
			return redirect(base_url() . 'donatur/edit/' . $id);
		}
		$this->session->set_flashdata('success', 'Data donatur berhasil disimpan');
		return redirect(base_url() . 'donatur/index');
	}

	public function delete($id){
		$con_donatur = array("id_user" => $id);
		$deleteDonatur = $this->all_model->deleteData('donatur', $con_donatur);
		if($deleteDonatur == true){
			$con_user = array("idUser" => $id);
			$deleteUser = $this->all_model->deleteData('user', $con_user);
			if($deleteUser == true){
				$this->session->set_flashdata('success', 'Data donatur berhasil dihapus');
				return redirect(base_url() . 'donatur/index');
			}
		}
		$this->session->set_flashdata('error', 'Data donatur gagal dihapus');
		return redirect(base_url() . 'donatur/index');
	}

	public function getAllDonatur(){
		// $result = $this->all_model->getListDonatur()->result();
		if (isset($_GET['term'])) {
            // $result = $this->blog_model->search_blog($_GET['term']);
            // if (count($result) > 0) {
            // foreach ($result as $row)
            //     $arr_result[] = $row->blog_title;
            //     echo json_encode($arr_result);
			// }
			// $condition = array('nama_project' => $_GET['term']);
			// $result = $this->all_model->getDataByCondition('project', $condition)->result();
			// if(count($result) > 0){
			// 	foreach($result as $row){
			// 		$arr_result[] = $row->nama_project;
			// 		echo json_encode($arr_result);
			// 	}
			// }
			// var_dump($_GET['term']);exit();
			
			$result = $this->all_model->getListDonatur()->result();
			if (count($result) > 0) {
			foreach ($result as $row)
				$arr_result[] = array('label' => $row->nama, 'value' => $row->idDonatur);
				echo json_encode($arr_result);
			}
        }
	}
}

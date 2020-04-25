<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('all_model');
	}

	public function index()
	{
		$condition = array('role' => 1);
		$data['user'] = $this->all_model->getDataByCondition('user', $condition)->result();
		$this->load->view('admin/index', $data);
	}

	public function add(){
		$this->load->view('admin/add');
	}

	public function processAdd(){
		$user = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'phone' => $this->input->post('phone'),
			'joinDate' => date('Y-m-d', strtotime(strtr($this->input->post('joinDate'), '/', '-'))),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
			'role' => 1,
			'username' => $this->input->post('username')
		);

		$res = $this->all_model->insertData('user', $user);
		if($res == false){
			$this->session->set_flashdata('error', 'Data admin gagal disimpan');
			return redirect(base_url() . 'admin/add');
		}
		$this->session->set_flashdata('success', 'Data admin berhasil disimpan');
		return redirect(base_url() . 'admin/index');
	}

	public function views($id)
	{
		$con_user = array('idUser' => $id);
		$data['user'] = $this->all_model->getDataByCondition('user', $con_user)->row();
		$this->load->view('admin/view', $data);
	}

	public function edit($id){
		$con_user = array('idUser' => $id);
		$data['user'] = $this->all_model->getDataByCondition('user', $con_user)->row();
		$this->load->view('admin/edit', $data);
	}

	public function processUpdate($id){
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
			$this->session->set_flashdata('error', 'Data admin gagal disimpan');
			return redirect(base_url() . 'admin/edit/' . $id);
		}
		$this->session->set_flashdata('success', 'Data admin berhasil disimpan');
		return redirect(base_url() . 'admin/index');
	}

	public function delete($id){
		$con_user = array("idUser" => $id);
		$deleteUser = $this->all_model->deleteData('user', $con_user);
		if($deleteUser == true){
			$this->session->set_flashdata('success', 'Data admin berhasil dihapus');
			return redirect(base_url() . 'admin/index');
		}
		$this->session->set_flashdata('error', 'Data admin gagal dihapus');
		return redirect(base_url() . 'admin/index');
	}
}

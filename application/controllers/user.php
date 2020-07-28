<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('all_model');
	}

	public function index()
	{
		$data['user'] = $this->all_model->getAllData('user')->result();
		$data['role'] = $this->all_model->getAllData('role')->result();
		$this->load->view('user/index', $data);
	}

	public function add(){
		$data['role'] = $this->all_model->getAllData('role')->result();
		$this->load->view('user/add', $data);
	}

	public function processAdd(){
		$user = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'phone' => $this->input->post('phone'),
			'joinDate' => date('Y-m-d', strtotime($this->input->post('joinDate'))),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
			'role' => $this->input->post('role'),
			'username' => $this->input->post('username')
		);

		$res_user = $this->all_model->insertData('user', $user);
		if($res_user == false){
			$this->session->set_flashdata('error', 'Data user gagal disimpan');
			return redirect(base_url() . 'user/add');
		}

		// $users = $this->all_model->getDataByLimit('user', 'idUser', 'desc', 1)->row();
		if(!$_FILES['userfiles']['name']){
			$users = $this->all_model->getDataByLimit('user', 'idUser', 'desc', 1)->row();
			$donatur = array(
				'angkatan' => $this->input->post('angkatan'),
				'gender' => $this->input->post('gender'),
				'birthDate' => date('Y-m-d', strtotime($this->input->post('birthDate'))),
				'id_user' => $users->idUser
			);
			$res = $this->all_model->insertData('donatur', $donatur);
			if($res == false){
				$this->session->set_flashdata('error', 'Data user gagal disimpan');
				return redirect(base_url() . 'user/add');
			}
			$this->session->set_flashdata('success', 'Data user berhasil disimpan');
			return redirect(base_url() . 'user/index');
		}else{
			$users = $this->all_model->getDataByLimit('user', 'idUser', 'desc', 1)->row();
			$new_name                   = time().$_FILES["userfiles"]['name'];
			$config['file_name']        = $new_name;
			$config['upload_path']      = './gambar/profile/';
			$config['allowed_types']    = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('userfiles')){
				// var_dump($this->upload->do_upload('userfiles'));
				$donatur = array(
					'angkatan' => $this->input->post('angkatan'),
					'gender' => $this->input->post('gender'),
					'birthDate' => date('Y-m-d', strtotime($this->input->post('birthDate'))),
					'id_user' => $users->idUser,
					'image' => $new_name,
					'jenisKeanggotaan' => 0
				);
				$res = $this->all_model->insertData('donatur', $donatur);
				if($res == false){
					$this->session->set_flashdata('error', 'Data user gagal disimpan');
					return redirect(base_url() . 'user/add');
				}
				$this->session->set_flashdata('success', 'Data user berhasil disimpan');
				return redirect(base_url() . 'user/index');
			}else{
				// var_dump($this->upload->do_upload('userfiles'));
				$this->session->set_flashdata('error', 'Data user gagal disimpan');
				return redirect(base_url() . 'user/add');
			}

			// $new_name                   = time().$_FILES["userfile"]['name'];
	        // $config['file_name']        = $new_name;
			// $config['upload_path']      = './gambar/profile/';
			// $config['allowed_types']    = 'gif|jpg|png|jpeg';

			// $this->load->library('upload', $config);
			// var_dump('upload: ',$this->upload->do_upload('userfile'));exit();

			// if (!$this->upload->do_upload('userfile')){
			// 	$donatur = array(
			// 		'angkatan' => $this->input->post('angkatan'),
			// 		'gender' => $this->input->post('gender'),
			// 		'birthDate' => date('Y-m-d', strtotime($this->input->post('birthDate'))),
			// 		'id_user' => $users->idUser,
			// 		'image' => $new_name,
			// 		'jenisKeanggotaan' => 0
			// 	);
			// 	var_dump($donatur);exit();
			// 	// $res = $this->all_model->insertData('donatur', $donatur);
			// 	// if($res == false){
			// 	// 	$this->session->set_flashdata('error', 'Data user gagal disimpan');
			// 	// 	return redirect(base_url() . 'user/add');
			// 	// }
			// 	// $this->session->set_flashdata('success', 'Data user berhasil disimpan');
			// 	// return redirect(base_url() . 'user/index');
			// }else{
			// 	var_dump($donatur);exit();
			// 	// $this->session->set_flashdata('error', 'Data user gagal disimpan');
			// 	// return redirect(base_url() . 'user/add');
			// }
		
		}
	}

	public function views($id){
		$con_user = array('idUser' => $id);
		$con_donatur = array('id_user' => $id);
		$data['user'] = $this->all_model->getDataByCondition('user', $con_user)->row();
		$data['donatur'] = $this->all_model->getDataByCondition('donatur', $con_donatur)->row();
		$data['role'] = $this->all_model->getAllData('role')->result();
		$this->load->view('user/view', $data);
	}

	public function edit($id){
		$con_user = array('idUser' => $id);
		$con_donatur = array('id_user' => $id);
		$data['user'] = $this->all_model->getDataByCondition('user', $con_user)->row();
		$data['donatur'] = $this->all_model->getDataByCondition('donatur', $con_donatur)->row();
		$data['role'] = $this->all_model->getAllData('role')->result();
		$this->load->view('user/edit', $data);
	}

	public function processEdit($id){
		// var_dump('join date: ', date('Y-m-d', strtotime($this->input->post('joinDate'))));exit();
		$con_user = array('idUser' => $id);
		$data_user = $this->all_model->getDataByCondition('user', $con_user)->row();
		$user = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'phone' => $this->input->post('phone'),
			'joinDate' => date('Y-m-d', strtotime($this->input->post('joinDate'))),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password') == "" ? $data_user->password : md5($this->input->post('password')),
			'username' => $this->input->post('username')
		);

		$res_user = $this->all_model->updateData('user', $con_user, $user);
		if($res_user == false){
			$this->session->set_flashdata('error', 'Data user gagal disimpan');
			return redirect(base_url() . 'user/edit/' . $id);
		}

		if(!$_FILES['userfile']['name']){
			$con_donatur = array('id_user' => $id);
			$donatur = array(
				'angkatan' => $this->input->post('angkatan'),
				'gender' => $this->input->post('gender'),
				'birthDate' => date('Y-m-d', strtotime($this->input->post('birthDate')))
			);

			$res = $this->all_model->updateData('donatur', $con_donatur, $donatur);
			if($res == false){
				$this->session->set_flashdata('error', 'Data user gagal diubah');
				return redirect(base_url() . 'user/edit/' . $id);
			}
			$this->session->set_flashdata('success', 'Data user berhasil diubah');
				return redirect(base_url() . 'user/index');
		}else{
			$con_donatur = array('id_user' => $id);
			$res_donatur = $this->all_model->getDataByCondition('donatur', $con_donatur)->row();

			unlink(FCPATH."gambar/profile/".$res_donatur->image);

			$new_name                   = time().$_FILES["userfiles"]['name'];
	        $config['file_name']        = $new_name;
			$config['upload_path']      = './gambar/profile/';
			$config['allowed_types']    = 'gif|jpg|png|jpeg';

			$this->load->library('upload', $config);
 
			if ($this->upload->do_upload('userfiles')){
				$donatur = array(
					'angkatan' => $this->input->post('angkatan'),
					'gender' => $this->input->post('gender'),
					'birthDate' => date('Y-m-d', strtotime($this->input->post('birthDate'))),
					'image' => $new_name
				);

				$res = $this->all_model->updateData('donatur', $con_donatur, $donatur);
				if($res == false){
					$this->session->set_flashdata('error', 'Data user gagal diubah');
					return redirect(base_url() . 'user/edit/' . $id);
				}
				$this->session->set_flashdata('success', 'Data user berhasil diubah');
					return redirect(base_url() . 'user/index');
				// $this->session->set_flashdata('error', 'Data user gagal diubah');
				// return redirect(base_url() . 'user/edit/' . $id);
			}else{
				// $donatur = array(
				// 	'angkatan' => $this->input->post('angkatan'),
				// 	'gender' => $this->input->post('gender'),
				// 	'birthDate' => date('Y-m-d', strtotime($this->input->post('birthDate'))),
				// 	'image' => $new_name
				// );

				// $res = $this->all_model->updateData('donatur', $con_donatur, $donatur);
				// if($res == false){
				// 	$this->session->set_flashdata('error', 'Data user gagal diubah');
				// 	return redirect(base_url() . 'user/edit/' . $id);
				// }
				// $this->session->set_flashdata('success', 'Data user berhasil diubah');
				// 	return redirect(base_url() . 'user/index');
				$this->session->set_flashdata('error', 'Data user gagal diubah');
				return redirect(base_url() . 'user/edit/' . $id);
			}
		}
	}

	public function delete($id){
		$con_donatur = array("id_user" => $id);
		$res_donatur = $this->all_model->getDataByCondition('donatur', $con_donatur)->row();

		unlink(FCPATH."gambar/profile/".$res_donatur->image);

		$deleteDonatur = $this->all_model->deleteData('donatur', $con_donatur);
		if($deleteDonatur == true){
			$con_user = array("idUser" => $id);
			$deleteUser = $this->all_model->deleteData('user', $con_user);
			if($deleteUser == true){
				$this->session->set_flashdata('success', 'Data user berhasil dihapus');
				return redirect(base_url() . 'user/index');
			}
		}
		$this->session->set_flashdata('error', 'Data donatur gagal dihapus');
		return redirect(base_url() . 'user/index');
	}
}

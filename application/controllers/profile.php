<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('all_model');
	}

	public function index()
	{
		$condition = array('idUser' => $this->session->userdata('id'));
		$data['profile'] = $this->all_model->getDataByCondition('user', $condition)->row();

		$con_donatur = array('id_user' => $this->session->userdata('id'));
		$data['donatur'] = $this->all_model->getDataByCondition('donatur', $con_donatur)->row();
		$this->load->view('profile/index', $data);
	}

	public function processUpdate(){
		$con_user = array('idUser' => $this->session->userdata('id'));
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
			$this->session->set_flashdata('error', 'Data profil gagal diubah');
			return redirect(base_url() . 'profile/index');
		}
		if(!$_FILES['userfile']['name']){
			$con_donatur = array('id_user' => $this->session->userdata('id'));
			$donatur = array(
				'angkatan' => $this->input->post('angkatan'),
				'gender' => $this->input->post('gender'),
				'birthDate' => date('Y-m-d', strtotime(strtr($this->input->post('birthDate'), '/', '-')))
			);

			$res = $this->all_model->updateData('donatur', $con_donatur, $donatur);
			if($res == false){
				$this->session->set_flashdata('error', 'Data profil gagal diubah');
				return redirect(base_url() . 'profile/index');
			}
			$this->session->set_flashdata('success', 'Data profil berhasil diubah. Silahkan logout.');
				return redirect(base_url() . 'profile/index');
		}else{
			$con_donatur = array('id_user' => $this->session->userdata('id'));
			$res_donatur = $this->all_model->getDataByCondition('donatur', $con_donatur)->row();

			unlink(FCPATH."gambar/profile/".$res_donatur->image);

			$new_name                   = time().$_FILES["userfile"]['name'];
	        $config['file_name']        = $new_name;
			$config['upload_path']      = './gambar/profile/';
			$config['allowed_types']    = 'gif|jpg|png';

			$this->load->library('upload', $config);
 
			if ( ! $this->upload->do_upload('userfile')){
				$this->session->set_flashdata('error', 'Data profil gagal diubah');
				return redirect(base_url() . 'profile/index');
			}else{
				$donatur = array(
					'angkatan' => $this->input->post('angkatan'),
					'gender' => $this->input->post('gender'),
					'birthDate' => date('Y-m-d', strtotime(strtr($this->input->post('birthDate'), '/', '-'))),
					'image' => $new_name
				);

				$res = $this->all_model->updateData('donatur', $con_donatur, $donatur);
				if($res == false){
					$this->session->set_flashdata('error', 'Data profil gagal diubah');
					return redirect(base_url() . 'profile/index');
				}
				$this->session->set_flashdata('success', 'Data profil berhasil diubah');
					return redirect(base_url() . 'profile/index');
			}
		}
	}
}

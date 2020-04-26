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
		if($this->session->userdata('role') == 1){
			$condition = array('idUser' => $this->session->userdata('id'));
			$profile = $this->all_model->getDataByCondition('user', $condition)->row();

			if($this->session->userdata('role') == 1) {
				$data = array(
					'nama' => $this->input->post('nama'),
					'username' => $this->input->post('username'),
					'password' => $this->input->post('username') == "" ? $profile->password : md5($this->input->post('password')),
					'email' => $this->input->post('email'),
					'phone' => $this->input->post('phone'),
					'joinDate' => date('Y-m-d', strtotime(strtr($this->input->post('joinDate'), '/', '-'))),
					'alamat' => $this->input->post('alamat')
				);
			}

			$res = $this->all_model->updateData('user', $condition, $data);
			if($res == false){
				$this->session->set_flashdata('error', 'Data profil gagal diubah');
				return redirect(base_url() . 'profile/index');
			}
			$this->session->set_flashdata('success', 'Data profil berhasil diubah');
			return redirect(base_url() . 'profile/index');
		}else{
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

			$con_donatur = array('id_user' => $this->session->userdata('id'));
			$donatur = array(
				'angkatan' => $this->input->post('angkatan'),
				'jenisKeanggotaan' => $this->input->post('jenisKeanggotan'),
				'gender' => $this->input->post('gender'),
				'birthDate' => date('Y-m-d', strtotime(strtr($this->input->post('birthDate'), '/', '-')))
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

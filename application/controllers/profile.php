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
		$this->load->view('profile/index', $data);
	}

	public function processUpdate(){
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
			$this->session->set_flashdata('error', 'Data profile gagal diupdate');
			return redirect(base_url() . 'profile/index');
		}
		$this->session->set_flashdata('success', 'Data profile berhasil diupdate');
		return redirect(base_url() . 'profile/index');
	}
}

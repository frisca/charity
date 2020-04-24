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
}

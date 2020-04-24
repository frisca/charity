<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Donatur extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('all_model');
	}

	public function index()
	{
		$condition = array('role' => 2);
		$data['donatur'] = $this->all_model->getDataByCondition('user', $condition)->result();
		$this->load->view('donatur/index', $data);
	}
}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Iuran extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('all_model');
	}

	public function index()
	{
		$this->load->view('index');
	}
}

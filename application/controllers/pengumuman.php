<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengumuman extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('all_model');
	}

	public function index()
	{
		$data['pengumuman'] = $this->all_model->getAllData('pengumuman')->result();
		$this->load->view('pengumuman/index', $data);
	}

	public function add(){
		$this->load->view('pengumuman/add');
	}
}

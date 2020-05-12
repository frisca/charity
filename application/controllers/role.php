<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Role extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('all_model');
	}

	public function index(){
		$data['role'] = $this->all_model->getAllData('role')->result();
		$this->load->view('role/index', $data);
	}

	public function add(){
		$this->load->view('role/add');
	}

	public function processAdd(){
		$user = array(
			'role' => $this->input->post('role')
		);

		$res = $this->all_model->insertData('role', $user);
		if($res == false){
			$this->session->set_flashdata('error', 'Data role gagal disimpan');
			return redirect(base_url() . 'role/add');
		}
		$this->session->set_flashdata('success', 'Data role berhasil disimpan');
		return redirect(base_url() . 'role/index');
	}

}

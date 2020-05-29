<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('all_model');
	}

	public function index()
	{
		$donasi = $this->all_model->getSumDonasi()->result();
		foreach ($donasi as $key => $value) {
			$tamp = array((int)$value->jan, (int)$value->feb, (int)$value->mar, (int)$value->apr, (int)$value->mei, (int)$value->jun, (int)$value->jul, (int)$value->agu, (int)$value->sep, (int)$value->okt, (int)$value->nov, (int)$value->des);
		}

		$data['donasi'] = $tamp;

		$giving = $this->all_model->getSumGiving()->result();
		foreach ($giving as $key => $value) {
			$tamp1 = array((int)$value->jan, (int)$value->feb, (int)$value->mar, (int)$value->apr, (int)$value->mei, (int)$value->jun, (int)$value->jul, (int)$value->agu, (int)$value->sep, (int)$value->okt, (int)$value->nov, (int)$value->des);
		}

		$data['giving'] = $tamp1;
		$data['man'] = $this->all_model->getCountGender('Laki-Laki')->row();
		$data['woman'] = $this->all_model->getCountGender('Perempuan')->row();
		$data['pengumuman'] = $this->all_model->getListPengumuman()->result();
		$data['comments'] = $this->all_model->getListComment()->result();
		$this->load->view('welcome', $data);
	}
}
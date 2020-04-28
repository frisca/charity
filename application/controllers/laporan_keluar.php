<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_Keluar extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('all_model');
	}

	public function index()
	{
		$data['transaksi'] = $this->all_model->getListTransaksiKeluar()->result();
		$data['total'] = $this->all_model->getTotalTransaksiKeluar()->row();
		$this->load->view('laporan_keluar/keluar', $data);
	}

	public function search(){
		$startDate = date('Y-m-d', strtotime(strtr($this->input->post('startDate'), '/', '-')));
		$endDate = date('Y-m-d', strtotime(strtr($this->input->post('endDate'), '/', '-')));
		return redirect(base_url() . 'laporan_keluar/resultSearch/' . $startDate . '/' . $endDate);
	}

	public function resultSearch($startDate, $endDate){
		$data['transaksi'] = $this->all_model->getSearchListTransaksiKeluar($startDate, $endDate)->result();
		$data['total'] = $this->all_model->getSearchTotalTransaksiKeluar($startDate, $endDate)->row();
		$this->load->view('laporan_keluar/keluar', $data);
	}
}

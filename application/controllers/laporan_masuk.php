<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_Masuk extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('all_model');
	}

	public function index()
	{
		// $bulan = array();
		// $bulans = array();

		// $bulan['name'] = "Januari";
		// $bulan['value'] = "01";

		// $bulans[] = $bulan;
		// $bulan= array();

		// $bulan['name'] = "Februari";
		// $bulan['value'] = "02";

		// $bulans[] = $bulan;
		// $bulan= array();

		// $bulan['name'] = "Maret";
		// $bulan['value'] = "03";

		// $bulans[] = $bulan;
		// $bulan= array();

		// $bulan['name'] = "April";
		// $bulan['value'] = "04";

		// $bulans[] = $bulan;
		// $bulan= array();

		// $bulan['name'] = "Mei";
		// $bulan['value'] = "05";

		// $bulans[] = $bulan;
		// $bulan= array();

		// $bulan['name'] = "Juni";
		// $bulan['value'] = "06";

		// $bulans[] = $bulan;
		// $bulan= array();

		// $bulan['name'] = "Juli";
		// $bulan['value'] = "07";

		// $bulans[] = $bulan;
		// $bulan= array();

		// $bulan['name'] = "Agustus";
		// $bulan['value'] = "08";

		// $bulans[] = $bulan;
		// $bulan= array();

		// $bulan['name'] = "September";
		// $bulan['value'] = "09";

		// $bulans[] = $bulan;
		// $bulan= array();

		// $bulan['name'] = "Oktober";
		// $bulan['value'] = "10";

		// $bulans[] = $bulan;
		// $bulan= array();

		// $bulan['name'] = "Nopember";
		// $bulan['value'] = "11";

		// $bulans[] = $bulan;
		// $bulan= array();

		// $bulan['name'] = "Desember";
		// $bulan['value'] = "12";

		// $bulans[] = $bulan;
		// $month = json_encode($bulans);
		// $data['bulan'] = json_decode($month);
		$data['transaksi'] = $this->all_model->getListTransaksiMasukApprove()->result();
		$data['total'] = $this->all_model->getTotalTransaksi()->row();
		$this->load->view('laporan_masuk/masuk', $data);
	}

	public function search(){
		$startDate = date('Y-m-d', strtotime(strtr($this->input->post('startDate'), '/', '-')));
		$endDate = date('Y-m-d', strtotime(strtr($this->input->post('endDate'), '/', '-')));
		return redirect(base_url() . 'laporan_masuk/resultSearch/' . $startDate . '/' . $endDate);
	}

	public function resultSearch($startDate, $endDate){
		// $bulan['name'] = "Januari";
		// $bulan['value'] = "01";

		// $bulans[] = $bulan;
		// $bulan= array();

		// $bulan['name'] = "Februari";
		// $bulan['value'] = "02";

		// $bulans[] = $bulan;
		// $bulan= array();

		// $bulan['name'] = "Maret";
		// $bulan['value'] = "03";

		// $bulans[] = $bulan;
		// $bulan= array();

		// $bulan['name'] = "April";
		// $bulan['value'] = "04";

		// $bulans[] = $bulan;
		// $bulan= array();

		// $bulan['name'] = "Mei";
		// $bulan['value'] = "05";

		// $bulans[] = $bulan;
		// $bulan= array();

		// $bulan['name'] = "Juni";
		// $bulan['value'] = "06";

		// $bulans[] = $bulan;
		// $bulan= array();

		// $bulan['name'] = "Juli";
		// $bulan['value'] = "07";

		// $bulans[] = $bulan;
		// $bulan= array();

		// $bulan['name'] = "Agustus";
		// $bulan['value'] = "08";

		// $bulans[] = $bulan;
		// $bulan= array();

		// $bulan['name'] = "September";
		// $bulan['value'] = "09";

		// $bulans[] = $bulan;
		// $bulan= array();

		// $bulan['name'] = "Oktober";
		// $bulan['value'] = "10";

		// $bulans[] = $bulan;
		// $bulan= array();

		// $bulan['name'] = "Nopember";
		// $bulan['value'] = "11";

		// $bulans[] = $bulan;
		// $bulan= array();

		// $bulan['name'] = "Desember";
		// $bulan['value'] = "12";

		// $bulans[] = $bulan;
		// $month = json_encode($bulans);
		// $data['bulan'] = json_decode($month);

		$data['transaksi'] = $this->all_model->getSearchListTransaksiMasuk($startDate, $endDate)->result();
		$data['total'] = $this->all_model->getSearchTotalTransaksiMasuk($startDate, $endDate)->row();
		$this->load->view('laporan_masuk/masuk', $data);
	}
}

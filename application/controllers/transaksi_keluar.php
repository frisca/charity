<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transaksi_Keluar extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('all_model');
	}

	public function index()
	{
		$data['transaksi'] = $this->all_model->getListTransaksiKeluar()->result();
		$this->load->view('transaksi/keluar/index', $data);
	}

	public function add(){
		$this->load->view('transaksi/keluar/add');
	}

	public function processAdd(){
		$data = array(
			'penerimaBeasiswa' => $this->input->post('penerima_beasiswa'),
			'jenisTransaksiKeluar' => $this->input->post('jenisTransaksiKeluar'),
			'keterangan' => $this->input->post('keterangan'),
			'jumlah' => $this->input->post('jumlah'),
			'tanggalTransaksi' => date('Y-m-d', strtotime($this->input->post('tanggalTransaksi')))
		);
		$result = $this->all_model->insertData('transaksi_keluar', $data);
		if($result == true){
			$this->session->set_flashdata('success', 'Data transaksi keluar berhasil disimpan');
			return redirect(base_url() . 'transaksi_keluar/index');
		}
		$this->session->set_flashdata('error', 'Data transaksi keluar gagal disimpan');
		return redirect(base_url() . 'transaksi_keluar/add');
	}


	public function edit($id){
		$data['transaksi'] = $this->all_model->getTransaksiKeluarById((int) $id)->row();
		$this->load->view('transaksi/keluar/edit', $data);
	}

	public function processUpdate($id){
		$condition = array('idTransaksiKeluar' => $id);
		$data = array(
			'penerimaBeasiswa' => $this->input->post('penerima_beasiswa'),
			'jenisTransaksiKeluar' => $this->input->post('jenisTransaksiKeluar'),
			'keterangan' => $this->input->post('keterangan'),
			'jumlah' => $this->input->post('jumlah'),
			'tanggalTransaksi' => date('Y-m-d', strtotime($this->input->post('tanggalTransaksi')))
		);
		$result = $this->all_model->updateData('transaksi_keluar', $condition, $data);
		if($result == true){
			$this->session->set_flashdata('success', 'Data transaksi keluar berhasil disimpan');
			return redirect(base_url() . 'transaksi_keluar/index');
		}
		$this->session->set_flashdata('error', 'Data transaksi keluar gagal disimpan');
		return redirect(base_url() . 'transaksi_keluar/edit/' . $id);
	}

	public function views($id){
		$data['transaksi'] = $this->all_model->getTransaksiKeluarById((int) $id)->row();
		$this->load->view('transaksi/keluar/view', $data);
	}

	public function delete($id){
		$condition = array('idTransaksiKeluar' => (int) $id);
		$res = $this->all_model->deleteData('transaksi_keluar', $condition);
		if($res == true){
			$this->session->set_flashdata('success', 'Data transaksi keluar berhasil dihapus');
			return redirect(base_url() . 'transaksi_keluar/index');
		}
		$this->session->set_flashdata('error', 'Data transaksi keluar gagal dihapus');
		return redirect(base_url() . 'transaksi_keluar/index');
	}
}

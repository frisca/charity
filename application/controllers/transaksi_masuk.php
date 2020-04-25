<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transaksi_Masuk extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('all_model');
	}

	public function index()
	{
		$data['transaksi_masuk'] = $this->all_model->getListTransaksiMasuk()->result();
		$this->load->view('transaksi/masuk/index', $data);
	}

	public function add(){
		$data['donatur'] = $this->all_model->getListDonatur()->result();
		$this->load->view('transaksi/masuk/add', $data);
	}

	public function processAdd(){
		$new_name                   = time().$_FILES["buktiBayar"]['name'];
        $config['file_name']        = $new_name;
		$config['upload_path']      = './gambar/';
		$config['allowed_types']    = 'gif|jpg|png';
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('buktiBayar')){
			$this->session->set_flashdata('error', 'Data transaksi masuk gagal disimpan');
			return redirect(base_url() . 'transaksi_masuk/add');
		}else{
			$data = array(
				'buktiBayar' => $new_name,
				'idDonatur' => $this->input->post('idDonatur'),
				'jumlah' => $this->input->post('jumlah'),
				'description' => $this->input->post('description'),
				'bankTransfer' => $this->input->post('bankTransfer'),
				'transferDate' => date('Y-m-d', strtotime(strtr($this->input->post('transferDate'), '/', '-'))),
				'jenisTransaksi' => $this->input->post('jenisTransaksi')
			);
			$result = $this->all_model->insertData('transaksi_masuk', $data);
			if($result == true){
				$this->session->set_flashdata('success', 'Data transaksi masuk berhasil disimpan');
				return redirect(base_url() . 'transaksi_masuk/index');
			}
		}
		$this->session->set_flashdata('error', 'Data transaksi masuk gagal disimpan');
		return redirect(base_url() . 'transaksi_masuk/add');
	}

	public function edit($id){
		$data['donatur'] = $this->all_model->getListDonatur()->result();
		$data['transaksi'] = $this->all_model->getTransaksiMasukById((int) $id)->row();
		$this->load->view('transaksi/masuk/edit', $data);
	}

	public function processUpdate($id){
		$transaksi = $this->all_model->getTransaksiMasukById($id)->row();
		$con_transaksi = array('idTransaksiMasuk' => $id);

		if(!$_FILES['buktiBayar']['name']){
			$data = array(
				'buktiBayar' => $transaksi->buktiBayar,
				'idDonatur' => $this->input->post('idDonatur'),
				'jumlah' => $this->input->post('jumlah'),
				'description' => $this->input->post('description'),
				'bankTransfer' => $this->input->post('bankTransfer'),
				'transferDate' => date('Y-m-d', strtotime(strtr($this->input->post('transferDate'), '/', '-'))),
				'jenisTransaksi' => $this->input->post('jenisTransaksi')
			);

			$result = $this->all_model->updateData('transaksi_masuk', $con_transaksi, $data);
			if($result == true){
				$this->session->set_flashdata('success', 'Data transaksi masuk berhasil disimpan');
				return redirect(base_url() . 'transaksi_masuk/index');
			}
			$this->session->set_flashdata('error', 'Data transaksi masuk gagal disimpan');
			return redirect(base_url() . 'transaksi_masuk/edit/' . $id);
		}else{
			unlink(FCPATH."gambar/".$transaksi->buktiBayar);

			$new_name                   = time().$_FILES["buktiBayar"]['name'];
	        $config['file_name']        = $new_name;
			$config['upload_path']      = './gambar/';
			$config['allowed_types']    = 'gif|jpg|png';

			$this->load->library('upload', $config);
 
			if ( ! $this->upload->do_upload('buktiBayar')){
				$this->session->set_flashdata('error', 'Data transaksi masuk gagal disimpan');
				return redirect(base_url() . 'transaksi_masuk/edit/' . $id);
			}else{
				$data = array(
					'buktiBayar' => $new_name,
					'idDonatur' => $this->input->post('idDonatur'),
					'jumlah' => $this->input->post('jumlah'),
					'description' => $this->input->post('description'),
					'bankTransfer' => $this->input->post('bankTransfer'),
					'transferDate' => $this->input->post('transferDate'),
					'jenisTransaksi' => $this->input->post('jenisTransaksi')
				);

				// var_dump($data);exit();
				$result = $this->all_model->updateData('transaksi_masuk', $con_transaksi, $data);

				if($result == true){
					$this->session->set_flashdata('success', 'Data transaksi masuk berhasil disimpan');
					return redirect(base_url() . 'transaksi_masuk/index');
				}
				$this->session->set_flashdata('error', 'Data transaksi masuk gagal disimpan');
				return redirect(base_url() . 'transaksi_masuk/edit/' . $id);
			}
		}
		$this->session->set_flashdata('error', 'Data transaksi masuk gagal disimpan');
		return redirect(base_url() . 'transaksi_masuk/edit/' . $id);
	}

	public function views($id){
		$data['donatur'] = $this->all_model->getListDonatur()->result();
		$data['transaksi'] = $this->all_model->getTransaksiMasukById((int) $id)->row();
		$this->load->view('transaksi/masuk/view', $data);
	}

	public function delete($id){
		$transaksi = $this->all_model->getTransaksiMasukById((int) $id)->row();

		unlink(FCPATH."gambar/".$transaksi->buktiBayar);

		$con_transaksi = array('idTransaksiMasuk' => (int) $id);

		$deleteTransaksi = $this->all_model->deleteData('transaksi_masuk', $con_transaksi);

		if($deleteTransaksi == true){
			$this->session->set_flashdata('success', 'Data transaksi masuk berhasil dihapus');
			return redirect(base_url() . 'transaksi_masuk/index');
		}
		$this->session->set_flashdata('error', 'Data transaksi masuk gagal dihapus');
		return redirect(base_url() . 'transaksi_masuk/index');
	}
}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Konfirmasi_Pembayaran extends CI_Controller {
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
		$data['konfirmasi_pembayaran'] = $this->all_model->getTransaksiMasukByUserId((int)$this->session->userdata('id'))->result();
		$this->load->view('konfirmasi_pembayaran/index', $data);
	}

	public function add(){
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
		$this->load->view('konfirmasi_pembayaran/add');
	}

	public function processAdd(){
		// $new_name                   = time().$_FILES["buktiBayar"]['name'];
        // $config['file_name']        = $new_name;
		// $config['upload_path']      = './gambar/';
		// $config['allowed_types']    = 'gif|jpg|png';
 
		// $this->load->library('upload', $config);
 
		// if ( ! $this->upload->do_upload('buktiBayar')){
		// 	$this->session->set_flashdata('error', 'Data pembayaran gagal disimpan');
		// 	return redirect(base_url() . 'konfirmasi_pembayaran/add');
		// }else{
		// 	$condition = array('id_user' => $this->session->userdata('id'));
		// 	$donatur = $this->all_model->getDataByCondition('donatur', $condition)->row();

		// 	if(!empty($this->input->post('month_year'))){
		// 		$month = explode("/", $this->input->post('month_year'));
		// 	}else{
		// 		$month[0] = 0;
		// 		$month[1] = 0;
		// 	}

		// 	$data = array(
		// 		'buktiBayar' => $new_name,
		// 		'idDonatur' => $donatur->idDonatur,
		// 		'jumlah' => $this->input->post('jumlah'),
		// 		'description' => $this->input->post('description'),
		// 		'bankTransferTujuan' => $this->input->post('bankTransferTujuan'),
		// 		'transferDate' => date('Y-m-d', strtotime(strtr($this->input->post('transferDate'), '/', '-'))),
		// 		'jenisTransaksi' => $this->input->post('jenisTransaksi'),
		// 		'month' => $month[0],
		// 		'year' => $month[1],
		// 		'status_approve' => 1,
		// 		'bankDonatur' => $this->input->post('bankDonatur'),
		// 		'noRekTujuan' => $this->input->post('noRekTujuan'),
		// 		'noRekPengirim' => $this->input->post('noRekPengirim'),
		// 		'namaPenerima' => $this->input->post('namaPenerima'),
		// 		'namaPengirim' => $this->input->post('namaPengirim')
		// 	);
		// 	$result = $this->all_model->insertData('transaksi_masuk', $data);
		// 	if($result == true){
		// 		$this->session->set_flashdata('success', 'Data pembayaran berhasil disimpan');
		// 		return redirect(base_url() . 'konfirmasi_pembayaran/index');
		// 	}
		// }
		// $this->session->set_flashdata('error', 'Data pembayaran gagal disimpan');
		// return redirect(base_url() . 'konfirmasi_pembayaran/add');
		
		// var_dump(date('Y-m-d', strtotime($this->input->post('transferDate'))));
		$new_name                   = time().$_FILES["buktiBayar"]['name'];
		$config['file_name']        = $new_name;
		$config['upload_path']      = './gambar/';
		$config['allowed_types']    = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('buktiBayar')){
			$condition = array('id_user' => $this->session->userdata('id'));
			$donatur = $this->all_model->getDataByCondition('donatur', $condition)->row();
			$data = array(
				'buktiBayar' => $new_name,
				'idDonatur' => $donatur->idDonatur,
				'jumlah' => $this->input->post('jumlah'),
				'description' => $this->input->post('description'),
				'bankTransferTujuan' => $this->input->post('bankTransferTujuan'),
				'transferDate' => date('Y-m-d', strtotime($this->input->post('transferDate'))),
				'jenisTransaksi' => $this->input->post('jenisTransaksi'),
				// 'month' => $month[0],
				'status_approve' => 1,
				'bankDonatur' => $this->input->post('bankDonatur'),
				'noRekTujuan' => $this->input->post('noRekTujuan'),
				'noRekPengirim' => $this->input->post('noRekPengirim'),
				'namaPenerima' => $this->input->post('namaPenerima'),
				'namaPengirim' => $this->input->post('namaPengirim')
				// 'year' => $month[1]
			);

			$result = $this->all_model->insertData('transaksi_masuk', $data);
			if($result == true){
				$this->session->set_flashdata('success', 'Data pembayaran berhasil disimpan');
				return redirect(base_url() . 'konfirmasi_pembayaran/index');
			}
		}else{
			$this->session->set_flashdata('error', 'Data pembayaran gagal disimpan');
			return redirect(base_url() . 'konfirmasi_pembayaran/add');
		}
	}

	public function views($id){
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
		$data['konfirmasi_pembayaran'] = $this->all_model->getTransaksiMasukById((int) $id)->row();
		$this->load->view('konfirmasi_pembayaran/view', $data);
	}

	public function edit($id){
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
		$data['konfirmasi_pembayaran'] = $this->all_model->getTransaksiMasukById((int) $id)->row();
		$this->load->view('konfirmasi_pembayaran/edit', $data);
	}

	public function processUpdate($id){
		$transaksi = $this->all_model->getTransaksiMasukById($id)->row();
		$con_transaksi = array('idTransaksiMasuk' => $id);

		// if(!empty($this->input->post('month_year'))){
		// 	$month = explode("/", $this->input->post('month_year'));
		// }else{
		// 	$month[0] = 0;
		// 	$month[1] = 0;
		// }

		if(!$_FILES['buktiBayar']['name']){
			$data = array(
				'buktiBayar' => $transaksi->buktiBayar,
				'jumlah' => $this->input->post('jumlah'),
				'description' => $this->input->post('description'),
				'bankTransferTujuan' => $this->input->post('bankTransferTujuan'),
				'transferDate' => date('Y-m-d', strtotime($this->input->post('transferDate'))),
				'jenisTransaksi' => $this->input->post('jenisTransaksi'),
				// 'month' => $month[0],
				'status_approve' => 1,
				'bankDonatur' => $this->input->post('bankDonatur'),
				'noRekTujuan' => $this->input->post('noRekTujuan'),
				'noRekPengirim' => $this->input->post('noRekPengirim'),
				'namaPenerima' => $this->input->post('namaPenerima'),
				'namaPengirim' => $this->input->post('namaPengirim')
				// 'year' => $month[1]
			);

			$result = $this->all_model->updateData('transaksi_masuk', $con_transaksi, $data);
			if($result == true){
				$this->session->set_flashdata('success', 'Data pembayaran berhasil disimpan');
				return redirect(base_url() . 'konfirmasi_pembayaran/index');
			}
			$this->session->set_flashdata('error', 'Data pembayaran gagal disimpan');
			return redirect(base_url() . 'konfirmasi_pembayaran/edit/' . $id);
		}else{
			unlink(FCPATH."gambar/".$transaksi->buktiBayar);

			$new_name                   = time().$_FILES["buktiBayar"]['name'];
	        $config['file_name']        = $new_name;
			$config['upload_path']      = './gambar/';
			$config['allowed_types']    = 'gif|jpg|png';

			$this->load->library('upload', $config);
 
			if ($this->upload->do_upload('buktiBayar')){
				$data = array(
					'buktiBayar' => $new_name,
					'jumlah' => $this->input->post('jumlah'),
					'description' => $this->input->post('description'),
					'bankTransferTujuan' => $this->input->post('bankTransferTujuan'),
					'transferDate' => date('Y-m-d', strtotime($this->input->post('transferDate'))),
					'jenisTransaksi' => $this->input->post('jenisTransaksi'),
					// 'month' => $month[0],
					'status_approve' => 1,
					'bankDonatur' => $this->input->post('bankDonatur'),
					'noRekTujuan' => $this->input->post('noRekTujuan'),
					'noRekPengirim' => $this->input->post('noRekPengirim'),
					'namaPenerima' => $this->input->post('namaPenerima'),
					'namaPengirim' => $this->input->post('namaPengirim')
					// 'year' => $month[1]
				);

				// var_dump($data);exit();
				$result = $this->all_model->updateData('transaksi_masuk', $con_transaksi, $data);

				if($result == true){
					$this->session->set_flashdata('success', 'Data pembayaran berhasil disimpan');
					return redirect(base_url() . 'konfirmasi_pembayaran/index');
				}
				$this->session->set_flashdata('error', 'Data pembayaran gagal disimpan');
				return redirect(base_url() . 'konfirmasi_pembayaran/edit/' . $id);
				// $this->session->set_flashdata('error', 'Data transaksi masuk gagal disimpan');
				// return redirect(base_url() . 'transaksi_masuk/edit/' . $id);
			}else{
				$this->session->set_flashdata('error', 'Data transaksi masuk gagal disimpan');
				return redirect(base_url() . 'transaksi_masuk/edit/' . $id);
			}
		}
		$this->session->set_flashdata('error', 'Data pembayaran gagal disimpan');
		return redirect(base_url() . 'konfirmasi_pembayaran/edit/' . $id);
	}

	public function delete($id){
		$transaksi = $this->all_model->getTransaksiMasukById((int) $id)->row();

		unlink(FCPATH."gambar/".$transaksi->buktiBayar);

		$con_transaksi = array('idTransaksiMasuk' => (int) $id);

		$deleteTransaksi = $this->all_model->deleteData('transaksi_masuk', $con_transaksi);

		if($deleteTransaksi == true){
			$this->session->set_flashdata('success', 'Data pembayaran berhasil dihapus');
			return redirect(base_url() . 'konfirmasi_pembayaran/index');
		}
		$this->session->set_flashdata('error', 'Data pembayaran gagal dihapus');
		return redirect(base_url() . 'konfirmasi_pembayaran/index');
	}
}

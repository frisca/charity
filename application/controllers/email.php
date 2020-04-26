<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('all_model');
	}

	public function index()
	{
		$data['email']  = $this->all_model->getListEmail($this->session->userdata('id'))->result();
		$this->load->view('email/index', $data);
	}

	public function insertEmail(){
		$con_donatur = array('jenisKeanggotaan' => 1);
		$donatur = $this->all_model->getDataByCondition('donatur', $con_donatur)->result();

		foreach ($donatur as $key => $value) {
			$condition = array('dateEmail' => date('Y-m') . '-26', 'toUser' => $value->idDonatur);
			$email = $this->all_model->getDataByCondition('email', $condition)->result();

			if(empty($email)){
				$datas = array(
					'judul' => 'Reminder Iuran',
					'toUser' => $value->idDonatur,
					'fromUser' => 'Admin',
					'dateEmail' => date('Y-m-d'),
					'message' => '<p>Silahkan melakukan pembayaran iuran sebelum jatuh tanggal 26- ' . date('m-Y')  .'.</p><p>Jika Anda sudah membayar iuran, Anda dapat mengabaikan email ini.</p><p>Sekian dan Terimakasih.</p>',
					'status' => 0
				);
				$res = $this->all_model->insertData('email', $datas);
				if($res == true){
					$data = 'Berhasil';
					echo json_encode($data);
				}else{
					echo json_encode($data);
				}
			}
		}
	}

	public function notif(){
		$data['message'] = $this->all_model->getNotifEmail($this->session->userdata('id'))->result();
		echo json_encode($data);
	}

	public function views($id){
		$condition = array('idEmail' => $id);
		$data = array('status' => 1);

		$res = $this->all_model->updateData('email', $condition, $data);
		if($res == true){
			$data['email'] = $this->all_model->getEmailById($id)->row();
			$this->load->view('email/view', $data);
		}
	}
}

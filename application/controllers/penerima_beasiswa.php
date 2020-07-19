<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Penerima_Beasiswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('all_model');
	}

	public function index()
	{
		$data['beasiswa'] = $this->all_model->getAllData('penerima_beasiswa')->result();
		$this->load->view('beasiswa/index', $data);
	}

	public function add(){
		$this->load->view('beasiswa/add');
	}

	public function processAdd(){
		$user = array(
			'angkatan' => $this->input->post('angkatan'),
			'jenjang_studi' => $this->input->post('jenjang_studi'),
			'status' => $this->input->post('status'),
			'gender' => $this->input->post('gender'),
			'alamat' => $this->input->post('alamat'),
			'tgl_bergabung' => date('Y-m-d', strtotime(strtr($this->input->post('tgl_bergabung'), '/', '-'))),
			'semester' => $this->input->post('semester'),
			'anak_ke' => $this->input->post('anak_ke'),
			'jmlh_saudara' => $this->input->post('jmlh_saudara'),
			'nama_ayah' => $this->input->post('nama_ayah'),
			'nama_ibu' => $this->input->post('nama_ibu'),
			'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
			'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
			'penghasilan_ayah' => $this->input->post('penghasilan_ayah'),
			'penghasilan_ibu' => $this->input->post('penghasilan_ibu'),
			'rekening' => $this->input->post('rekening'),
			'keterangan' => $this->input->post('keterangan'),
			'birth_date' => date('Y-m-d', strtotime(strtr($this->input->post('birth_date'), '/', '-'))),
			'nama' => $this->input->post('nama')
		);

		$res = $this->all_model->insertData('penerima_beasiswa', $user);
		if($res == false){
			$this->session->set_flashdata('error', 'Data penerima beasiswa gagal disimpan');
			return redirect(base_url() . 'penerima_beasiswa/add');
		}
		$this->session->set_flashdata('success', 'Data penerima beasiswa berhasil disimpan');
		return redirect(base_url() . 'penerima_beasiswa/index');
	}

	public function edit($id){
		$condition = array('id_beasiswa' => $id);
		$data['beasiswa'] = $this->all_model->getDataByCondition('penerima_beasiswa', $condition)->row();
		$this->load->view('beasiswa/edit', $data);
	}

	public function processUpdate($id){
		$condition = array('id_beasiswa' => $id);
		$user = array(
			'angkatan' => $this->input->post('angkatan'),
			'jenjang_studi' => $this->input->post('jenjang_studi'),
			'status' => $this->input->post('status'),
			'gender' => $this->input->post('gender'),
			'alamat' => $this->input->post('alamat'),
			'tgl_bergabung' => date('Y-m-d', strtotime(strtr($this->input->post('tgl_bergabung'), '/', '-'))),
			'semester' => $this->input->post('semester'),
			'anak_ke' => $this->input->post('anak_ke'),
			'jmlh_saudara' => $this->input->post('jmlh_saudara'),
			'nama_ayah' => $this->input->post('nama_ayah'),
			'nama_ibu' => $this->input->post('nama_ibu'),
			'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
			'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
			'penghasilan_ayah' => $this->input->post('penghasilan_ayah'),
			'penghasilan_ibu' => $this->input->post('penghasilan_ibu'),
			'rekening' => $this->input->post('rekening'),
			'keterangan' => $this->input->post('keterangan'),
			'birth_date' => date('Y-m-d', strtotime(strtr($this->input->post('birth_date'), '/', '-'))),
			'nama' => $this->input->post('nama')
		);
		$res = $this->all_model->updateData('penerima_beasiswa', $condition, $user);
		if($res == false){
			$this->session->set_flashdata('error', 'Data penerima beasiswa gagal disimpan');
			return redirect(base_url() . 'penerima_beasiswa/edit/' . $id);
		}
		$this->session->set_flashdata('success', 'Data penerima beasiswa berhasil disimpan');
		return redirect(base_url() . 'penerima_beasiswa/index');
	}

	public function views($id){
		if($this->session->userdata('role') == 2){
			$condition = array('id_beasiswa' => $id, 'status' => 1);
			$data['beasiswa'] = $this->all_model->getDataByCondition('penerima_beasiswa', $condition)->row();
			$this->load->view('beasiswa/view', $data);
		}else{
			$condition = array('id_beasiswa' => $id);
			$data['beasiswa'] = $this->all_model->getDataByCondition('penerima_beasiswa', $condition)->row();
			$this->load->view('beasiswa/view', $data);
		}
	}

	public function delete($id){
		$condition = array("id_beasiswa" => $id);
		$res = $this->all_model->deleteData('penerima_beasiswa', $condition);
		if($res == true){
			$this->session->set_flashdata('success', 'Data penerima beasiswa berhasil dihapus');
			return redirect(base_url() . 'penerima_beasiswa/index');
		}
		$this->session->set_flashdata('error', 'Data penerima beasiswa gagal dihapus');
		return redirect(base_url() . 'penerima_beasiswa/index');
	}

	public function getAllBeasiswa(){
		// $result = $this->all_model->getListDonatur()->result();
		if (isset($_GET['term'])) {
            // $result = $this->blog_model->search_blog($_GET['term']);
            // if (count($result) > 0) {
            // foreach ($result as $row)
            //     $arr_result[] = $row->blog_title;
            //     echo json_encode($arr_result);
			// }
			// $condition = array('nama_project' => $_GET['term']);
			// $result = $this->all_model->getDataByCondition('project', $condition)->result();
			// if(count($result) > 0){
			// 	foreach($result as $row){
			// 		$arr_result[] = $row->nama_project;
			// 		echo json_encode($arr_result);
			// 	}
			// }
			// var_dump($_GET['term']);exit();
			
			$result = $this->all_model->getAllData('penerima_beasiswa')->result();
			if (count($result) > 0) {
			foreach ($result as $row)
				$arr_result[] = array('label' => $row->nama, 'value' => $row->id_beasiswa);
				echo json_encode($arr_result);
			}
        }
	}
}

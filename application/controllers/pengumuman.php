<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengumuman extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('ckeditor_helper');
		 
		 
		//Ckeditor's configuration
		$this->data['ckeditor'] = array(
		 
		 	//ID of the textarea that will be replaced
		 	'id' => 'content',
			'path' => 'js/ckeditor',
		 
			 //Optionnal values
			 'config' => array(
			 'toolbar' => "Full", //Using the Full toolbar
			 'width' => "550px", //Setting a custom width
			 'height' => '100px', //Setting a custom height		 
		),
		 
		//Replacing styles from the "Styles tool"
		'styles' => array(
		 
		//Creating a new style named "style 1"
		'style 1' => array (
		 'name' => 'Blue Title',
		 'element' => 'h2',
		 'styles' => array(
		 'color' => 'Blue',
		 'font-weight' => 'bold'
		 )
		),
		 
		//Creating a new style named "style 2"
		'style 2' => array (
			 'name' => 'Red Title',
			 'element' => 'h2',
			 'styles' => array(
			 'color' => 'Red',
			 'font-weight' => 'bold',
			 'text-decoration' => 'underline'
			 )
		 	) 
		   )
		 );
		 
		 $this->data['ckeditor_2'] = array(
		 
		 //ID of the textarea that will be replaced
		 'id' => 'content_2',
		 'path' => 'js/ckeditor',
		 
		 //Optionnal values
		 'config' => array(
		 'width' => "100%", //Setting a custom width
		 'height' => '100px', //Setting a custom height
		 'toolbar' => array( //Setting a custom toolbar
		 array('Bold', 'Italic'),
		 array('Underline', 'Strike', 'FontSize'),
		 array('Smiley'),
		 '/'
		 )
		 ),
		 
		 //Replacing styles from the "Styles tool"
		 'styles' => array(
		 
		 //Creating a new style named "style 1"
		 'style 3' => array (
		 'name' => 'Green Title',
		 'element' => 'h3',
		 'styles' => array(
		 'color' => 'Green',
		 'font-weight' => 'bold'
		 )
		 )
		 
		 )
		 ); 
		$this->load->model('all_model');
	}

	public function index()
	{
		$data['pengumuman'] = $this->all_model->getAllData('pengumuman')->result();
		$this->load->view('pengumuman/index', $data);
	}

	public function add(){
		$this->load->library('CKEditor');
 		$this->load->library('CKFinder');
 
 		//Add Ckfinder to Ckeditor
		$this->ckfinder->SetupCKEditor($this->ckeditor,'../../assets/ckfinder/');
		$this->load->view('pengumuman/add');
	}

	public function processAdd(){
		$pengumuman = array(
			'judul' => $this->input->post('judul'),
			'createdBy' => $this->input->post('createdBy'),
			'createdDate' => date('Y-m-d', strtotime(strtr($this->input->post('createdDate'), '/', '-'))),
			'isi' => $this->input->post('isi'),
			'status' => $this->input->post('status')
		);

		$res = $this->all_model->insertData('pengumuman', $pengumuman);
		if($res == false){
			$this->session->set_flashdata('error', 'Data pengumuman gagal disimpan');
			return redirect(base_url() . 'pengumuman/add');
		}
		$this->session->set_flashdata('success', 'Data pengumuman berhasil disimpan');
		return redirect(base_url() . 'pengumuman/index');
	}

	public function views($id)
	{
		if($this->session->userdata('role') == 2){
			$condition = array('id_pengumuman' => $id, 'status' => 1);
			$data['pengumuman'] = $this->all_model->getDataByCondition('pengumuman', $condition)->row();
			$this->load->view('pengumuman/view', $data);
		}else{
			$condition = array('id_pengumuman' => $id);
			$data['pengumuman'] = $this->all_model->getDataByCondition('pengumuman', $condition)->row();
			$this->load->view('pengumuman/view', $data);
		}
	}

	public function edit($id){
		$condition = array('id_pengumuman' => $id);
		$data['pengumuman'] = $this->all_model->getDataByCondition('pengumuman', $condition)->row();
		$this->load->view('pengumuman/edit', $data);
	}

	public function processUpdate($id){
		$condition = array('id_pengumuman' => $id);
		$pengumuman = array(
			'judul' => $this->input->post('judul'),
			'createdBy' => $this->input->post('createdBy'),
			'createdDate' => date('Y-m-d', strtotime(strtr($this->input->post('createdDate'), '/', '-'))),
			'isi' => $this->input->post('isi'),
			'status' => $this->input->post('status')
		);

		$res = $this->all_model->updateData('pengumuman', $condition, $pengumuman);
		if($res == false){
			$this->session->set_flashdata('error', 'Data pengumuman gagal disimpan');
			return redirect(base_url() . 'pengumuman/edit/' . $id);
		}
		$this->session->set_flashdata('success', 'Data pengumuman berhasil disimpan');
		return redirect(base_url() . 'pengumuman/index');
	}

	public function delete($id){
		$condition = array("id_pengumuman" => $id);
		$res = $this->all_model->deleteData('pengumuman', $condition);
		if($res == true){
			$this->session->set_flashdata('success', 'Data pengumuman berhasil dihapus');
			return redirect(base_url() . 'pengumuman/index');
		}
		$this->session->set_flashdata('error', 'Data pengumuman gagal dihapus');
		return redirect(base_url() . 'pengumuman/index');
	}
}

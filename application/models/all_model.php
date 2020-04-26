<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class All_model extends CI_Model {
	public function getAllData($table)
	{
		return $this->db->get($table);
	}

	public function getDataByCondition($table,$condition)
	{
		$this->db->where($condition);
		return $this->db->get($table);
	}

	public function insertData($table,$data){
		return $this->db->insert($table, $data);
	}

	public function updateData($table, $condition, $data){
		$this->db->where($condition);
		return $this->db->update($table, $data);
	}

	public function getDataByLimit($table, $condition, $order, $limit)
	{
		$this->db->order_by($condition, $order);
		$this->db->limit($limit);
		return $this->db->get($table);
	}
	
	public function deleteData($table, $condition){
		$this->db->delete($table, $condition);
		return true;
	}

	public function getListTransaksiMasuk(){
		$query = "SELECT tm.*, d.*, u.* FROM transaksi_masuk tm left join  donatur d on d.idDonatur = tm.idDonatur left join user u on u.idUser = d.id_user";
		$result = $this->db->query($query);
		return $result;
	}

	public function getListDonatur(){
		$query = "SELECT  d.*, u.* FROM donatur d left join user u on d.id_user = u.idUser where role = 2";
		$result = $this->db->query($query);
		return $result;
	}

	public function getTransaksiMasukById($id){
		$query = "SELECT tm.*, d.*, u.* FROM transaksi_masuk tm left join  donatur d on d.idDonatur = tm.idDonatur left join user u on u.idUser = d.id_user where tm.idTransaksiMasuk = " . $id;
		$result = $this->db->query($query);
		return $result;
	}

	public function getListTransaksiKeluar(){
		$query = "SELECT tk.*, b.* FROM transaksi_keluar tk left join penerima_beasiswa b on tk.id_beasiswa = b.id_beasiswa";
		$result = $this->db->query($query);
		return $result;
	}

	public function getTransaksiKeluarById($id){
		$query = "SELECT tk.*, b.* FROM transaksi_keluar tk left join penerima_beasiswa b on tk.id_beasiswa = b.id_beasiswa where tk.idTransaksiKeluar = " . $id;
		$result = $this->db->query($query);
		return $result;
	}

	public function getTransaksiMasukByUserId($id){
		$query = "SELECT tm.*, d.*, u.* FROM transaksi_masuk tm left join  donatur d on d.idDonatur = tm.idDonatur left join user u on u.idUser = d.id_user where d.id_user = " . $id;
		$result = $this->db->query($query);
		return $result;
	}

	public function getListTransaksiMasukProses(){
		$query = "SELECT tm.*, d.*, u.* FROM transaksi_masuk tm left join  donatur d on d.idDonatur = tm.idDonatur left join user u on u.idUser = d.id_user where tm.read = 0 and tm.status_approve = 1";
		$result = $this->db->query($query);
		return $result;
	}

	public function getListTransaksiMasukApproveAndReject($id){
		$query = "SELECT tm.*, d.*, u.* FROM transaksi_masuk tm left join  donatur d on d.idDonatur = tm.idDonatur left join user u on u.idUser = d.id_user where (tm.read = 0 and tm.status_approve = 2) or (tm.read = 0 and tm.status_approve = 3) and d.idDonatur = " . $id;
		$result = $this->db->query($query);
		return $result;
	}

	public function getNotifEmail($id){
		$query = "SELECT e.*, d.*, u.idUser, u.nama FROM email e left join  donatur d on d.idDonatur = e.toUser left join user u on u.idUser = d.id_user where e.status = 0 and u.idUser = " . $id;
		$result = $this->db->query($query);
		return $result;
	}

	public function getListEmail($id){
		$query = "SELECT e.*, d.*, u.idUser, u.nama FROM email e left join  donatur d on d.idDonatur = e.toUser left join user u on u.idUser = d.id_user where u.idUser = " . $id;
		$result = $this->db->query($query);
		return $result;
	}

	public function getEmailById($id){
		$query = "SELECT e.*, d.*, u.idUser, u.nama FROM email e left join  donatur d on d.idDonatur = e.toUser left join user u on u.idUser = d.id_user where e.idEmail = " . $id;
		$result = $this->db->query($query);
		return $result;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
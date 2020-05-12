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

	public function getTotalTransaksi(){
		$query = "SELECT sum(jumlah) as total FROM transaksi_masuk where status_approve = 2";
		$result = $this->db->query($query);
		return $result;
	}

	public function getListTransaksiMasukApprove(){
		$query = "SELECT tm.*, d.*, u.* FROM transaksi_masuk tm left join  donatur d on d.idDonatur = tm.idDonatur left join user u on u.idUser = d.id_user where tm.status_approve = 2";
		$result = $this->db->query($query);
		return $result;
	}

	public function getSearchTotalTransaksiMasuk($startDate, $endDate){
		$query = "SELECT sum(tm.jumlah) as total FROM transaksi_masuk tm WHERE tm.transferDate BETWEEN '" . $startDate . "' and '" . $endDate . "' and tm.status_approve = 2 " ;
		$result = $this->db->query($query);
		return $result;
	}

	public function getSearchListTransaksiMasuk($startDate, $endDate){
		$query = "SELECT tm.*, d.*, u.* FROM transaksi_masuk tm left join donatur d on d.idDonatur = tm.idDonatur left join user u on u.idUser = d.id_user WHERE tm.transferDate BETWEEN '" . $startDate . "' and '" . $endDate . "' and tm.status_approve = 2";
		$result = $this->db->query($query);
		return $result;
	}

	public function getTotalTransaksiKeluar(){
		$query = "SELECT sum(jumlah) as total FROM transaksi_keluar";
		$result = $this->db->query($query);
		return $result;
	}

	public function getSearchTotalTransaksiKeluar($startDate, $endDate){
		$query = "SELECT sum(tk.jumlah) as total FROM transaksi_keluar tk WHERE tk.tanggalTransaksi BETWEEN '" . $startDate . "' and '" . $endDate . "'";
		$result = $this->db->query($query);
		return $result;
	}

	public function getSearchListTransaksiKeluar($startDate, $endDate){
		$query = "SELECT tk.*, b.* FROM transaksi_keluar tk left join penerima_beasiswa b on tk.id_beasiswa = b.id_beasiswa WHERE tk.tanggalTransaksi BETWEEN '" . $startDate . "' and '" . $endDate . "'";
		$result = $this->db->query($query);
		return $result;
	}

	public function getListPengumuman(){
		$query = "SELECT p.*, d.*, u.* FROM pengumuman p left join donatur d on d.idDonatur = p.createdBy left join user u on d.id_user = u.idUser where p.status = 1";
		$result = $this->db->query($query);
		return $result;
	}

	public function getCountGender($gender){
		$query = "SELECT count(gender) as count_gender FROM donatur where gender = '" . $gender . "'";
		$result = $this->db->query($query);
		return $result;
	}

	public function getSumDonasi(){
		$query = "SELECT 
					sum(case when month='1' then jumlah ELSE 0 end) as jan,
				    sum(case when month='2' then jumlah ELSE 0 end) as feb,
				    sum(case when month='3' then jumlah ELSE 0 end) as mar,
				    sum(case when month='4' then jumlah ELSE 0 end) as apr,
				    sum(case when month='5' then jumlah ELSE 0 end) as mei,
				    sum(case when month='6' then jumlah ELSE 0 end) as jun,
				    sum(case when month='7' then jumlah ELSE 0 end) as jul,
				    sum(case when month='8' then jumlah ELSE 0 end) as agu,
				    sum(case when month='9' then jumlah ELSE 0 end) as sep,
				    sum(case when month='10' then jumlah ELSE 0 end) as okt,
				    sum(case when month='11' then jumlah ELSE 0 end) as nov,
				    sum(case when month='12' then jumlah ELSE 0 end) as des
				FROM `transaksi_masuk` GROUP by idDonatur and month";
		$result = $this->db->query($query);
		return $result;
	}

	public function getSumGiving(){
		$query = "SELECT 
					sum(case when month(tanggalTransaksi)='01' then jumlah ELSE 0 end) as jan,
				    sum(case when month(tanggalTransaksi)='02' then jumlah ELSE 0 end) as feb,
				    sum(case when month(tanggalTransaksi)='03' then jumlah ELSE 0 end) as mar,
				    sum(case when month(tanggalTransaksi)='04' then jumlah ELSE 0 end) as apr,
				    sum(case when month(tanggalTransaksi)='05' then jumlah ELSE 0 end) as mei,
				    sum(case when month(tanggalTransaksi)='06' then jumlah ELSE 0 end) as jun,
				    sum(case when month(tanggalTransaksi)='07' then jumlah ELSE 0 end) as jul,
				    sum(case when month(tanggalTransaksi)='08' then jumlah ELSE 0 end) as agu,
				    sum(case when month(tanggalTransaksi)='09' then jumlah ELSE 0 end) as sep,
				    sum(case when month(tanggalTransaksi)='10' then jumlah ELSE 0 end) as okt,
				    sum(case when month(tanggalTransaksi)='11' then jumlah ELSE 0 end) as nov,
				    sum(case when month(tanggalTransaksi)='12' then jumlah ELSE 0 end) as des
				FROM transaksi_keluar group BY month(tanggalTransaksi)";
		$result = $this->db->query($query);
		return $result;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
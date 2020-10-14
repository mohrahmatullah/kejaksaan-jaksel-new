<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_report_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	function get_report($cari=0,$offset, $limit=0){
		if ($this->session->userdata('user_login_level') == 'admin'){
			$this->db->where('uraian.pegawai_id', $this->session->userdata('user_pegawai_id'));
		}
		$this->db->select("pegawai.id_pegawai, pegawai.nama as namapegawai, uraian.nama as namauraian, uraian.create_date as tglbuat, uraian.id_uraian");
		$this->db->from("uraian");
		$this->db->join("pegawai","pegawai.id_pegawai = uraian.pegawai_id","left");
		$this->db->join("users","users.pegawai_id = pegawai.id_pegawai","left");
		if ($cari != '0'){
			$this->db->like('uraian.nama', $cari);
			$this->db->or_like('uraian.deskripsi', $cari);
			$this->db->or_like('pegawai.nama', $cari);
		}
    	$this->db->order_by('uraian.create_date', 'DESC');
		if ($limit > 0){
			$this->db->limit($limit, $offset);
		}
		$result = $this->db->get();

		return $result;
	}

	function get_report_pdf(){
		if ($this->session->userdata('user_login_level') == 'admin'){
			$this->db->where('uraian.pegawai_id', $this->session->userdata('user_pegawai_id'));
		}
		$this->db->select("uraian.id_uraian, pegawai.id_pegawai, pegawai.nama as namapegawai, uraian.nama as namauraian, uraian.create_date as tglbuat, verification.time_before, verification.time_after, peraturan.nomor as nomorperaturan, sop.nama as namasop");
		$this->db->from("uraian");
		$this->db->join("pegawai","pegawai.id_pegawai = uraian.pegawai_id","left");		
		$this->db->join("verification","verification.pegawai_id = pegawai.id_pegawai","left");
		$this->db->join("sop","sop.id_sop = uraian.sop_id","left");
		$this->db->join("peraturan","peraturan.id_peraturan = sop.peraturan_id","left");

		$result = $this->db->get();

		return $result;
	}

	function get_report_detail($id){
		if ($this->session->userdata('user_login_level') == 'admin'){
			$this->db->where('uraian.pegawai_id', $this->session->userdata('user_pegawai_id'));
		}
		$this->db->select("uraian.id_uraian, pegawai.id_pegawai, pegawai.nama as namapegawai, uraian.nama as namauraian, uraian.create_date as tglbuat, verification.time_before, verification.time_after, peraturan.nomor as nomorperaturan, sop.nama as namasop");
		$this->db->from("uraian");
		$this->db->join("pegawai","pegawai.id_pegawai = uraian.pegawai_id","left");		
		$this->db->join("verification","verification.pegawai_id = pegawai.id_pegawai","left");
		$this->db->join("sop","sop.id_sop = uraian.sop_id","left");
		$this->db->join("peraturan","peraturan.id_peraturan = sop.peraturan_id","left");
		$this->db->where('id_uraian', $id);

		$result = $this->db->get();

		return $result->row();
	}
		
}
 

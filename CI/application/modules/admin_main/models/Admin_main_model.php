<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_main_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	function cek_login($username,$password){
		$this->db->select("*");
		$this->db->from("users");
    	$this->db->where('email', $username);
    	$this->db->where('password', $password);
		$result = $this->db->get();

		return $result;
	}

	function getNamaJabatanByPegawaiID($pegawaiID){
		$namaJabatan = "";
		$this->db->select("pegawai.nik, pegawai.nama, pegawai.alamat, pegawai.jabatan_id, pegawai_jabatan.nama as nama_jabatan");
		$this->db->from("pegawai");
		$this->db->join("pegawai_jabatan","pegawai.jabatan_id = pegawai_jabatan.id_jabatan");
		$this->db->where('id_pegawai', $pegawaiID);
		$query = $this->db->get();
		$result = $query->row();

		if(!empty($result->nama_jabatan)){
			$namaJabatan = $result->nama_jabatan;
		}
		return $namaJabatan;
	}
		
}
 

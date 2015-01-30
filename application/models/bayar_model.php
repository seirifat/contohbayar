<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Bayar_model extends CI_Model
{
    public function __construct()
    {
		parent :: __construct();
		
	}
	
	public function select_all(){
		$this->db->select('*');
		$this->db->from('meja m');
		$this->db->join('bayar b','m.mejaid = b.mejaid');
		$this->db->join('makanan mk','b.makananid = mk.makananid');
		return $this->db->get()->result();
	}
	
	public function select_filter($mj = 0){
		$this->db->select('*');
		$this->db->from('meja m');
		$this->db->join('bayar b','m.mejaid = b.mejaid');
		$this->db->join('makanan mk','b.makananid = mk.makananid');
		$this->db->where('m.mejaid',$mj);
		return $this->db->get()->result();
	}
	
	public function insert_bayar($dataInsert,$idupdate,$dataUpdate){
		//Transaction
		$this->db->trans_begin();
			$this->db->where('mejaid', $idupdate);
			$this->db->update('meja', $dataUpdate);
			$this->db->insert('nota', $dataInsert);
		
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
		}
		else
		{
			$this->db->trans_commit();
		}
	}
	
	
}
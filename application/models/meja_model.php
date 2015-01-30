<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Meja_model extends CI_Model
{
    public $db_tabel = 'meja';

    public function __construct()
    {
		parent :: __construct();
		
	}
	
	public function select_all(){
		$this->db->select('*');
		$this->db->from($this->db_tabel);
		return $this->db->get()->result();
	}
	
}
<?php if(!defined('BASEPATH'))exit('No direct script access allowed');
class Bayar extends CI_Controller
{
		
    public function __construct()
    {
        parent :: __construct();
        $this->load->model('meja_model','meja',TRUE);
        $this->load->model('bayar_model','bayar',TRUE);
    }
	
	public function index()
	{
		$data['meja'] = $this->meja->select_all();
		//$data['bayar'] = $this->bayar->select_all();
		$this->load->view('viewBayar',$data);
	}
	
	public function filterMeja()
	{
		$mj = $this->input->post('mejaid');
		$data['meja'] = $this->meja->select_all();
		$data['bayar'] = $this->bayar->select_filter($mj);
		$data['mjid'] = $this->input->post('mejaid');
		$this->load->view('viewBayar',$data);
	}
	public function prosesBayar()
	{
		$dataInsert['totalbayar'] = $this->input->post('totalbayar');
		$dataUpdate['status'] = 0;
		$idUpdate = $this->input->post('mjid');
		$this->bayar->insert_bayar($dataInsert,$idUpdate,$dataUpdate);
		redirect(site_url('bayar'));
	}
	
}
//End kelas.php
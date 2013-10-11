<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ketua extends MY_Controller {

	public function index()
	{
		$data["content"]["1"] = modules::run('sen_aktiviti/senarai',"Siap");
		$data["content"]["2"] = modules::run('sen_aktiviti/senarai',"Tidak Siap");
		$this->load->view("layout",$data);
	}

}

/* End of file ketua.php */
/* Location: ./application/controllers/ketua.php */
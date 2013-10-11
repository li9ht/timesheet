<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sen_aktiviti extends MX_Controller {

	public function index(){}

	public function senarai($status)	
	{
		$this->load->model("aktiviti_model");

		$activities = $this->aktiviti_model->getStatus($status);
		$data["activities"] = $activities;
		
		$this->load->view("senarai",$data);	
	}

}

/* End of file sen_aktiviti.php */
/* Location: ./application/modules/sen_aktiviti/controllers/sen_aktiviti.php */
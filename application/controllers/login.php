<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		
		$data["content"]["1"] = $this->load->view('login/index', "", TRUE);
		$this->load->view("layout",$data);
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */
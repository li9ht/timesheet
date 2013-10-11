<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		$data["content"]["1"] = $this->load->view('login/index', "", TRUE);
		$this->load->view("layout",$data);
	}

	/**
	 * authenticate user / login
	 * @return [type] [description]
	 */
	public function auth()
	{
		if($this->input->post("submit")){
			if($this->input->post("username")=="admin" && $this->input->post("password")=="admin"){
				$this->session->set_userdata('login', '1');
				redirect("aktiviti");
			}
			else
			{
				$this->index();
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('login');
		redirect("login");
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */
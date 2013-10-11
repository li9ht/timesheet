<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aktiviti extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
		$this->load->model("aktiviti_model");
		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
	}

	public function index()
	{
		$activities = $this->aktiviti_model->getAll();
		$data["activities"] = $activities;

		//var_dump($activities);
		$data["content"]["1"] = $this->load->view('aktiviti/index', $data, TRUE);
		$this->load->view("layout",$data);	
	}

	/**
	 * Page untuk aktiviti baru
	 */
	public function baru()
	{
		$data["content"]["1"] = $this->load->view('aktiviti/baru', "", TRUE);
		$this->load->view("layout",$data);
	}

	/**
	 * Save aktiviti baru
	 */
	public function simpan()
	{
		
		$this->form_validation->set_rules('ukmper', 'Ukmper', 'trim|required|xss_clean');
		$this->form_validation->set_rules('masa_mula', 'Masa Mula', 'trim|required|xss_clean');
		$this->form_validation->set_rules('aktiviti', 'Aktiviti', 'trim|required|xss_clean');
		$this->form_validation->set_rules('kategori', 'Kategori', 'trim|required|xss_clean');
		$this->form_validation->set_rules('status', 'Status', 'trim|required|xss_clean');

		if ($this->form_validation->run())
		{	
			$aktiviti_baru = array(
				'ukmper' 	 => $this->input->post("ukmper"),
				'masa_mula'  => $this->input->post("masa_mula"),
				'masa_tamat' => $this->input->post("masa_tamat"),
				'jumlah_jam' => $this->input->post("jumlah_jam"),
				'aktiviti' 	 => $this->input->post("aktiviti"),
				'modul' 	 => $this->input->post("modul"),
				'kategori' 	 => $this->input->post("kategori"),
				'status' 	 => $this->input->post("status"),
				'isu' 		 => $this->input->post("isu")
			);

			//if simpan berjaya
			//set session flash data untuk papar message berjaya
			if($this->aktiviti_model->save($aktiviti_baru)){
				$this->session->set_flashdata("message","Simpan Berjaya");
				redirect("aktiviti/index");
			}

		}else{
			$this->baru();	
		}

	}

	/**
	 * padam aktiviti
	 * @param  [type] $aktiviti_id
	 * @return [type]
	 */
	public function hapus($aktiviti_id)
	{
		if(!empty($aktiviti_id)){
			if($this->aktiviti_model->hapus($aktiviti_id)){
				$this->session->set_flashdata("message","Hapus Berjaya");
				redirect("aktiviti/index");
			}
		}
	}



}

/* End of file aktiviti.php */
/* Location: ./application/controllers/aktiviti.php */
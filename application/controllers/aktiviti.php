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
	 * [simpan data]
	 * @param  [type] $aktiviti_id [id aktiviti if kemaskini]
	 * @return [type]              [description]
	 */
	public function simpan($aktiviti_id=NULL)
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

			//if tekan button kemaskini
			if($this->input->post("kemaskini")){
				//if kemaskini berjaya
				//set session flash data untuk papar message berjaya
				if($this->aktiviti_model->update($aktiviti_baru,$aktiviti_id)){
					$this->session->set_flashdata("message","Kemaskini Berjaya");
					redirect("aktiviti/index");
				}
			}

			if($this->input->post("submit")){
				//if simpan berjaya
				//set session flash data untuk papar message berjaya
				if($this->aktiviti_model->save($aktiviti_baru)){
					$this->session->set_flashdata("message","Simpan Berjaya");
					redirect("aktiviti/index");
				}
			}

		}else{
			if($this->input->post("submit")) $this->baru(); //if xvalidate ; form baru
			if($this->input->post("kemaskini")) $this->baru($aktiviti_id); //if xvalidate; form kemaskini	
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

	/**
	 * Kemaskini aktiviti 
	 * @param  [type] $aktiviti_id [id aktiviti]
	 * @return [type]              [form kemaskini]
	 */
	public function kemaskini($aktiviti_id)
	{
		$aktivitiDetail = $this->aktiviti_model->getById($aktiviti_id);
		$data["aktivitiDetail"] = $aktivitiDetail[0];

		$data["content"]["1"] = $this->load->view('aktiviti/kemaskini', $data , TRUE);
		$this->load->view("layout",$data);

	}



}

/* End of file aktiviti.php */
/* Location: ./application/controllers/aktiviti.php */
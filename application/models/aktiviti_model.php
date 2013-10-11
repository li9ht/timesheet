<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aktiviti_model extends CI_Model {

	public function getAll()
	{	
		$query = $this->db->get("aktiviti");
		return $query->result();
	}

	/**
	 * save aktiviti baru
	 * @param  [type] $aktiviti_baru
	 * @return [type] insert_id
	 */
	public function save($aktiviti_baru)
	{
		return $this->db->insert('aktiviti', $aktiviti_baru);
	}

	/**
	 * padam aktiviti 
	 * @param  [type] $aktiviti_id
	 * @return [type]
	 */
	public function hapus($aktiviti_id)
	{
		return $this->db->delete('aktiviti', array('id' => $aktiviti_id)); 
	}
	

}

/* End of file aktiviti_model.php */
/* Location: ./application/models/aktiviti_model.php */
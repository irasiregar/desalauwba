<?php
/**
 * 
 */
class Pendidikan extends CI_Controller
{
	
	function form() {    
	 $this->load->view('pendidikan_form_v');
	} 

	function insert() { 
		$data = array(     
			'status' => $this->input->post('in_status'),     'jumlah' => $this->input->post('in_jumlah') );  

			 $this->Pendidikan_m->insert_db($data); redirect('Pendidikan/form');
			}   

}
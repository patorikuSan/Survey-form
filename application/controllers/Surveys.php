<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surveys extends CI_Controller {

	public function index()
	{
		$this->load->view('survey_sheet');
	}

	public function process_form(){
		
		if($this->input->post() != NULL){
			$session_data = array(
				'name' => $this->input->post('name'),
				'location' => $this->input->post('location'),
				'language' => $this->input->post('language'),
				'comment' => $this->input->post('comment')
			);
			redirect('surveys/result'.$this->session->set_userdata($session_data));
		}
	}

	public function result(){
		if($this->session->userdata()){
			$hits = $this->session->userdata('hits');
			$this->session->set_userdata('hits', $hits + 1);
		} else {
			$this->session->set_userdata('hits', 1);
		}
			$this->load->view('results');
	}

}
<?php

class Students extends CI_Controller {

	public function signup()
	{
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->helper('url'); 
		$this->load->library('form_validation');
		
		$data['title'] = 'New Student Registration';
		
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'text', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header_rest', $data);	
			$this->load->view('students/signup');
			$this->load->view('templates/footer_rest');
			
		}
		else
		{
			$this->news_model->set_news();
			$this->load->view('student/success');
		}
	}
}
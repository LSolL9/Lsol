<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class geeno extends CI_Controller {


	public function index()
	{
		$this->load->view('mycss');
		$this->load->view('geeno_view');
	}

	public function geeno1()
	{
		
		$this->load->view('mycss1');
		$this->load->view('geeno1_view');
	}

	public function geeno2()
	{
		$this->load->view('mycss');
		$this->load->view('geeno2_view');
	}


}

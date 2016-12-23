<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	
	public function index()
	{
		$this->load->library('session');
		$this->load->helper('url');
		
		if ($this->session->userdata("connexionCLI")=="ok")
			// l'utilisateur est correctement authentifié
			$this->load->view('client/index');
		else 
			redirect ("user/login");
	}
}

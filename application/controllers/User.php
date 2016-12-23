<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	
	public function login()
	{
		$this->load->library('session');
		$this->load->helper('url');

		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$u = $this->input->post("username");
			$p = $this->input->post("password");
			if ($u=="commercial" && $p=="aqwzsx") {
				$this->session->set_userdata("connexionCOM", "ok");
				redirect (site_url("home/messagerie"));
				return;
			}
			if ($u=="client" && $p=="aqwzsx") {
				$this->session->set_userdata("connexionCLI", "ok");
				redirect (site_url("client/index"));
				return;
			}
		}

		$this->load->view('user/login');
	}

	public function logout()
	{
		$this->load->library('session');
		$this->load->helper('url');

		$this->session->unset_userdata('connexionCOM');
		$this->session->unset_userdata('connexionCLI');
		redirect (site_url("home/accueil"));
	}
}

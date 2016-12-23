<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
	    $this->load->view('home/index');
    }

    public function accueil()
    {
	    $this->load->view('home/accueil');
    }

    public function contact()
	{
    	$this->load->view('home/contact');
	}

	public function script_contact()
    {
        $data = $this->input->post();

        $this->load->database();
        $str = $this->db->insert_string('CONT', $data);
        $this->db->query($str);

        redirect('/home/accueil', 'location');
    }

    public function messagerie()
    {
        $this->load->library('session');
        $this->load->helper('url');

        if ($this->session->userdata("connexionCOM")=="ok"){
	    $this->load->database();
        $model["allmessage"] = $this->db->query('SELECT * from CONT');
	    $model["liste"] = $this->db->query('SELECT * from CONT ORDER BY mes_id desc');
	    $this->load->view('/home/messagerie', $model);
        }
        else
            redirect ("user/login");
    }

    public function messageriesortbyWait()
    {  
        $this->load->library('session');
        $this->load->helper('url');

        if ($this->session->userdata("connexionCOM")=="ok"){
        $this->load->database();
        $model["allmessage"] = $this->db->query('SELECT * from CONT');
        $model["liste"] = $this->db->query('SELECT * from CONT where mes_traitement like "%attente%" ORDER BY mes_id desc');
        $this->load->view('/home/messagerie', $model);
        }
        else
            redirect ("user/login");
    }

    public function messageriesortbyCurrent()
    {  
        $this->load->library('session');
        $this->load->helper('url');

        if ($this->session->userdata("connexionCOM")=="ok"){
        $this->load->database();
        $model["allmessage"] = $this->db->query('SELECT * from CONT');
        $model["liste"] = $this->db->query('SELECT * from CONT where mes_traitement like "%cours%" ORDER BY mes_id desc');
        $this->load->view('/home/messagerie', $model);
        }
        else
            redirect ("user/login");
    }

    public function messageriesortbyEnded()
    {
        $this->load->library('session');
        $this->load->helper('url');

        if ($this->session->userdata("connexionCOM")=="ok"){
        $this->load->database();
        $model["allmessage"] = $this->db->query('SELECT * from CONT');
        $model["liste"] = $this->db->query('SELECT * from CONT where mes_traitement like "%termine%" ORDER BY mes_id desc');
        $this->load->view('/home/messagerie', $model);
        }
        else
            redirect ("user/login");
    }    
    public function message($id)
    {
        $this->load->library('session');
        $this->load->helper('url');

        if ($this->session->userdata("connexionCOM")=="ok"){
        $this->load->database();
        $liste = $this->db->query('SELECT * from CONT where mes_id= ?', array($id));
        $model["message"] = $liste->row();
        $this->load->view('/home/message', $model);
        }
        else
            redirect ("user/login");
    }

    public function script_update()
    {
        $data = $this->input->post();
        $id = $this->input->post("mes_id");
        $this->load->database();
        $str = $this->db->update_string('CONT', $data, "mes_id=".$id);
        $this->db->query($str);
        redirect('/home/messagerie', 'location');
    }

    public function script_delete()
    {
        $id = $this->input->post("mes_id");
        $this->load->database();
        $str = $this->db->delete('CONT', array('mes_id'=>$id));
        redirect('/home/messagerie', 'location');
    }

    public function information()
    {
        $this->load->view('/home/information');
    }
}
?>
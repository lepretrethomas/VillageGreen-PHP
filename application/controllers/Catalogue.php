<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Catalogue extends CI_Controller {

    public function index()
    {
        $this->load->database();
        $model["liste"] = $this->db->query('SELECT PROD.*, FOUR.fou_nom, RUB2.ru2_nom FROM PROD JOIN RUB2 ON RUB2.ru2_id=PROD.ru2_id JOIN FOUR ON FOUR.fou_id=PROD.fou_id  ORDER BY PROD.pro_id desc');
        $this->load->view('/produit/catalogue', $model);
    }

    public function listePage1()
    {
        $this->load->database();
        $model["liste"] = $this->db->query('SELECT PROD.*, FOUR.fou_nom, RUB2.ru2_nom FROM PROD JOIN RUB2 ON RUB2.ru2_id=PROD.ru2_id JOIN FOUR ON FOUR.fou_id=PROD.fou_id  ORDER BY PROD.pro_id desc');
        $this->load->view('/produit/catalogue1', $model);
    }
    
    public function listePage2()
    {
        $this->load->database();
        $model["liste"] = $this->db->query('SELECT PROD.*, FOUR.fou_nom, RUB2.ru2_nom FROM PROD JOIN RUB2 ON RUB2.ru2_id=PROD.ru2_id JOIN FOUR ON FOUR.fou_id=PROD.fou_id  ORDER BY PROD.pro_id desc');
        $this->load->view('/produit/catalogue2', $model);
    }
    
    public function listePage3()
    {
        $this->load->database();
        $model["liste"] = $this->db->query('SELECT PROD.*, FOUR.fou_nom, RUB2.ru2_nom FROM PROD JOIN RUB2 ON RUB2.ru2_id=PROD.ru2_id JOIN FOUR ON FOUR.fou_id=PROD.fou_id  ORDER BY PROD.pro_id desc');
        $this->load->view('/produit/catalogue3', $model);
    }
    
    public function listePage4()
    {
        $this->load->database();
        $model["liste"] = $this->db->query('SELECT PROD.*, FOUR.fou_nom, RUB2.ru2_nom FROM PROD JOIN RUB2 ON RUB2.ru2_id=PROD.ru2_id JOIN FOUR ON FOUR.fou_id=PROD.fou_id  ORDER BY PROD.pro_id desc');
        $this->load->view('/produit/catalogue4', $model);
    }
    
    public function listePage5()
    {
        $this->load->database();
        $model["liste"] = $this->db->query('SELECT PROD.*, FOUR.fou_nom, RUB2.ru2_nom FROM PROD JOIN RUB2 ON RUB2.ru2_id=PROD.ru2_id JOIN FOUR ON FOUR.fou_id=PROD.fou_id  ORDER BY PROD.pro_id desc');
        $this->load->view('/produit/catalogue5', $model);
    }

    public function categorie($id)
    {
	    $this->load->database();
	    $model["liste"] = $this->db->query('SELECT PROD.*, FOUR.fou_nom, RUB2.* FROM PROD JOIN FOUR ON FOUR.fou_id=PROD.fou_id JOIN RUB2 ON RUB2.ru2_id=PROD.ru2_id WHERE PROD.ru2_id= ? ORDER BY PROD.pro_id desc',  array($id));
	    $this->load->view('/produit/categorie', $model);
    }
    
    public function recherche()
    {   
        $mot = $this->input->get("keyword");
        $this->load->database();
        $model["liste"] = $this->db->query("SELECT PROD.*, FOUR.fou_nom, RUB2.ru2_nom FROM PROD JOIN FOUR ON FOUR.fou_id=PROD.fou_id JOIN RUB2 ON RUB2.ru2_id=PROD.ru2_id WHERE (PROD.pro_lib like '%$mot%' OR PROD.pro_des like '%$mot%' OR RUB2.ru2_nom like '%$mot%')");
        $this->load->view('/produit/catalogue', $model);
    }

	public function detail($id)
	{
	    $this->load->database();
	    $liste = $this->db->query("SELECT PROD.*, FOUR.fou_nom, RUB2.ru2_nom FROM PROD JOIN FOUR ON FOUR.fou_id=PROD.fou_id JOIN RUB2 ON RUB2.ru2_id=PROD.ru2_id where PROD.pro_id= ?", array($id));
        $model["produit"] = $liste->row();
	    $this->load->view('/produit/detail', $model);
	 }

}

?>
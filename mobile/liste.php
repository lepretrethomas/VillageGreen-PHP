<?php 
	header('Content-Type: application/json');
	$mot = $_GET["query"];
	$db = new PDO("mysql:host=localhost;dbname=thomasl;charset=utf8", "thomasl", "thomas");
	$requete = $db->query("select * from PRODall where (pro_lib like '%$mot%' OR pro_des like '%$mot%' OR ru2_nom like '%$mot%' OR ru1_nom like '%$mot%') ");
	$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
	//var_dump($tableau);
	echo json_encode($tableau);
?>
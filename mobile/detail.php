<?php 
	header('Content-Type: application/json');
	$id = $_GET["query"];
	$db = new PDO("mysql:host=localhost;dbname=thomasl;charset=utf8", "thomasl", "thomas");
	$requete = $db->query("select * from PRODall where pro_id = ".$id);
	$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
	//var_dump($tableau);
	echo json_encode($tableau);
?>
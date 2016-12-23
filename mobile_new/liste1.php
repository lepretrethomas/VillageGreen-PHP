<?php 
	header('Content-Type: application/json');
	$mot = $_GET["query"];
	$db = new PDO("mysql:host=localhost;dbname=villagegreen;charset=utf8", "root", "");
	$requete = $db->query("select * from PROD join RUB2 on PROD.ru2_id = RUB2.ru2_id join RUB1 on RUB2.ru1_id = RUB1.ru1_id where (pro_lib like '%$mot%' OR pro_des like '%$mot%' OR ru2_nom like '%$mot%' OR ru1_nom like '%$mot%') ");
	$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
	//var_dump($tableau);
	echo json_encode($tableau);
?>
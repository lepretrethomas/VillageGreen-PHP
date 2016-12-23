<?php 
	header('Content-Type: application/json');
	$db = new PDO("mysql:host=localhost;dbname=villagegreen;charset=utf8", "root", "");
	$requete = $db->query("select * from RUB1");
	$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
	//var_dump($tableau);
	echo json_encode($tableau);
?>
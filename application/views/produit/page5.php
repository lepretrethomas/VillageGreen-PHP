<?php

require ("paginationheader.php");

$i=0;
$nb=0;
foreach ($liste->result() as $produit) {
    $nb++;
    $i++;
    if (($i>48) && ($i<=60)) {
	
include ("display.php");

 } }



include ("paginationfooter.php"); ?>
<?php

require ("paginationheader.php");

$i=0;
$nb=0;
foreach ($liste->result() as $produit) {
    $nb++;
    $i++; 
    if (($i>12) && ($i<=24)) {

include ("display.php");

 } }

include ("paginationfooter.php"); ?>
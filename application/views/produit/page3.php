<?php

require ("paginationheader.php");

$i=0;
$nb=0;
foreach ($liste->result() as $produit) {
    $nb++;
    $i++;
    if (($i>24) && ($i<=36)) {

include ("display.php");

 } }

include ("paginationfooter.php"); ?>
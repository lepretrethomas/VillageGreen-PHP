<?php

require ("paginationheadercategorie.php");

$nb=0;
foreach ($liste->result() as $produit) {
    $nb++;
    {

include ("display.php");

 } }

include ("paginationfooter.php"); ?>
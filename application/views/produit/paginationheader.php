<?php

$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 ?>

<div class="container">
    <div class="well well-sm">
        <strong>Liste des produits</strong>
         <span><nav>
            <ul class="pagination">
              <li>
              </li>
              <li class="<?php if ($url == 'http://localhost/villagegreen/index.php/catalogue/listePage1'){echo 'active';} ?>"><a href="<?= site_url("catalogue/listePage1")?>" id="page1">1</a></li>
              <li class="<?php if ($url == 'http://localhost/villagegreen/index.php/catalogue/listePage2'){echo 'active';} ?>"><a href="<?= site_url("catalogue/listePage2")?>" id="page2">2</a></li>
              <li class="<?php if ($url == 'http://localhost/villagegreen/index.php/catalogue/listePage3'){echo 'active';} ?>"><a href="<?= site_url("catalogue/listePage3")?>" id="page3">3</a></li>
              <li class="disabled"><a href="<?= site_url("catalogue/listePage4")?>" id="page4">4</a></li>
              <li class="disabled"><a href="<?= site_url("catalogue/listePage5")?>" id="page5">5</a></li>
              <li>
              </li>
            </ul>
        </nav></span>
    </div>
    <div id="products" class="row list-group">
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">

	<link rel="stylesheet" type="text/css" href="<?= asset_url();?>css/bootstrap.css">
	
	<link rel="icon" type="image/png" sizes="96x96" href="<?= asset_url();?>ressources/logo/favicon-96x96.png">
	<script type="text/javascript" src="<?= asset_url();?>js/jquery-2.2.3.js"></script>
	<script type="text/javascript" src="<?= asset_url();?>js/bootstrap.js"></script>

	<link rel="stylesheet" type="text/css" href="<?= asset_url();?>css/villagegreen.css">
	<script type="text/javascript" src="<?= asset_url();?>js/villagegreen.js"></script>
</head>

<div id="page">

	<div data-role="header" id="header">
		<span id="espace">
		<a href="<?= site_url("home/messagerie")?>" title="Messagerie"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>Espace Commercial</button></a>
		<a title="Contact" data-placement="bottom"><button id="contacter" type="button" data-toggle="modal" data-target="#modalContact" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Nous contacter</button></a>
		<a href="<?= site_url("client/index")?>" title="Espace Client" data-placement="bottom"><button id="panier" type="button" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span>Espace Client</button></a>
		<a href="http://dl.bienvu.net/thomasl/prestashop/" title="Panier" data-placement="bottom"><button id="client" type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>Panier</button></a>
		</span>

		<div id="logo">
		<img src="<?= asset_url();?>ressources/logo/blank.png">
			<a href="<?= site_url("home/accueil")?>"><img src="<?= asset_url();?>ressources/logo/logocomplet.png" class="logo"></a>
		</div> <!-- logo -->

		<div id="menu">
			<ul class="nav nav-tabs" id="principal">
				<li id="marge1">.</li>
			</ul>

			<ul class="nav nav-tabs"  id="secondaire">
				<li id="marge2">.</li>
			</ul>
		</div> <!-- menu -->
	</div> <!-- header -->

<div id="modalContact" class="modal fade" role="dialog">
  <div class="modal-dialog" id="modaldialogContact">
    <div class="modal-content">
      <div class="modal-body" id="modalbodyContact">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
      </div>
    </div>
  </div>
</div> <!-- modal contact -->

<div id="client">
	Espace Client
    <div class="well well-sm">
    	<?php
		if ($this->session->userdata("connexionCLI")=="ok") {?>
	    <div><a href="<?= site_url("user/logout")?>"><button><img src="<?= asset_url();?>ressources/logo/logout.png"></button></a>
		<?php
		echo ("<i>Se déconnecter de la session</i>");
		}
		?></div> <!-- logout -->
    </div> <!-- bandeaulogout -->
</div> <!-- client -->

</div> <!-- page -->

</body>

	<link rel="stylesheet" type="text/css" href="<?= asset_url();?>css/catalogue.css">
	<link rel="stylesheet" type="text/css" href="<?= asset_url();?>css/villagegreen.css">
	<script type="text/javascript" src="<?= asset_url();?>js/villagegreen.js"></script>

</html>
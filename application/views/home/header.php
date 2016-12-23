<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Village Green</title>
	<link rel="stylesheet" type="text/css" href="<?= asset_url();?>css/bootstrap.css">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= asset_url();?>ressources/logo/favicon-96x96.png">
	<script type="text/javascript" src="<?= asset_url();?>js/jquery-2.2.3.js"></script>
	<script type="text/javascript" src="<?= asset_url();?>js/bootstrap.js"></script>

</head>

<div id="page">

	<div data-role="header" id="header">
		<span id="espace">
		<a href="<?= site_url("home/messagerie")?>" title="Messagerie"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>Espace Commercial</button></a>
		<a title="Contact" data-placement="bottom"><button id="contacter" type="button" data-toggle="modal" data-target="#modalContact" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Nous contacter</button></a>
		<a href="<?= site_url("client/index")?>" title="Espace Client" data-placement="bottom"><button id="panier" type="button" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span>Espace Client</button></a>
		<a href="<?= base_url();?>prestashop/" title="Panier" data-placement="bottom"><button id="client" type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>Panier</button></a>
		</span>

		<div id="logo">
		<img src="<?= asset_url();?>ressources/logo/blank.png">
			<a href="<?= site_url("home/index")?>"><img src="<?= asset_url();?>ressources/logo/logocomplet.png" class="logo"></a>
		</div> <!-- logo -->

		<div id="menu">
			<ul class="nav nav-tabs" id="principal">
				<li id="marge1">.</li>
				<li role="presentation" class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" id="menu1">Produits<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?= site_url("catalogue/listePage1")?>">Tous les produits</a></li>
						<li class="disabled"><a href="#">Meilleures ventes</a></li>
						<li class="disabled"><a href="#">Dernières nouveautés</a></li>
						<li class="disabled"><a href="#">Bons plans</a></li>
					</ul>
				</li>

				<li role="presentation" class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" id="menu1">Services<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li class="disabled"><a href="#">Livraison rapide gratuite</a></li>
						<li class="disabled"><a href="#">Garantie 30 jours satisfait ou remboursé</a></li>
						<li class="disabled"><a href="#">Sécurité de paiement</a></li>	
					</ul>
				</li>

				<li role="presentation" class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" id="menu1">Espace PRO<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li class="disabled"><a href="#">Tarification préférentielle</a></li>
						<li class="disabled"><a href="#">Conditions de paiement PRO</a></li>
						<li class="disabled"><a href="#">Devis en 48h</a></li>
						<li class="disabled"><a href="#">Etude personnalisée de chaque projet</a></li>
					</ul>
				</li>

				<li role="presentation" class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" id="menu1">A propos<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?= site_url("home/information")?>">Cahier des charges</a></li>
						<li class="disabled"><a href="#">Qui sommes-nous?</a></li>
						<li class="disabled"><a href="#">Conditions générales de ventes</a></li>
						<li class="disabled"><a href="#">Mentions légales</a></li>
						<li class="disabled"><a href="#">Plan du site</a></li>
					</ul>
				</li>
			</ul>

			<ul class="nav nav-tabs"  id="secondaire">
				<li id="marge2">.</li>
				<li role="presentation" class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" id="menu2">Guitares<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?= site_url("catalogue/categorie/4")?>"><img src="<?= asset_url();?>ressources/icone/banjo.png" class="icone">Banjos</a></li>
						<li><a href="<?= site_url("catalogue/categorie/1")?>"><img src="<?= asset_url();?>ressources/icone/basse_electrique.png" class="icone">Basses électriques</a></li>
						<li><a href="<?= site_url("catalogue/categorie/2")?>"><img src="<?= asset_url();?>ressources/icone/guitare_classique.png" class="icone">Guitares classiques</a></li>
						<li><a href="<?= site_url("catalogue/categorie/3")?>"><img src="<?= asset_url();?>ressources/icone/guitare_electrique.png" class="icone">Guitares électriques</a></li>
						<li class="disabled"><a href="#"><img src="<?= asset_url();?>ressources/icone/null.png" class="icone">Guitares acoustiques</a></li>
						<li class="disabled"><a href="#"><img src="<?= asset_url();?>ressources/icone/null.png" class="icone">Ukuleles</a></li>
						<li class="disabled"><a href="#"><img src="<?= asset_url();?>ressources/icone/null.png" class="icone">Accessoires</a></li>		
					</ul>
				</li>

				<li role="presentation" class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" id="menu2">Claviers<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?= site_url("catalogue/categorie/6")?>"><img src="<?= asset_url();?>ressources/icone/clavier.png" class="icone">Claviers</a></li>
						<li><a href="<?= site_url("catalogue/categorie/5")?>"><img src="<?= asset_url();?>ressources/icone/piano.png" class="icone">Pianos</a></li>
						<li class="disabled"><a href="#"><img src="<?= asset_url();?>ressources/icone/null.png" class="icone">Expandeurs</a></li>
						<li class="disabled"><a href="#"><img src="<?= asset_url();?>ressources/icone/null.png" class="icone">Orgues</a></li>
						<li class="disabled"><a href="#"><img src="<?= asset_url();?>ressources/icone/null.png" class="icone">Accessoires</a></li>
					</ul>
				</li>

				<li role="presentation" class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" id="menu2">Percussions<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?= site_url("catalogue/categorie/7")?>"><img src="<?= asset_url();?>ressources/icone/batterie.png" class="icone">Batteries</a></li>
						<li><a href="<?= site_url("catalogue/categorie/10")?>"><img src="<?= asset_url();?>ressources/icone/bongos.png" class="icone">Bongos</a></li>
						<li><a href="<?= site_url("catalogue/categorie/11")?>"><img src="<?= asset_url();?>ressources/icone/congas.png" class="icone">Congas</a></li>
						<li><a href="<?= site_url("catalogue/categorie/13")?>"><img src="<?= asset_url();?>ressources/icone/maracas.png" class="icone">Maracas</a></li>
						<li><a href="<?= site_url("catalogue/categorie/12")?>"><img src="<?= asset_url();?>ressources/icone/tambour.png" class="icone">Tambours</a></li>
						<li><a href="<?= site_url("catalogue/categorie/9")?>"><img src="<?= asset_url();?>ressources/icone/tambourin.png" class="icone">Tambourins</a></li>		
						<li><a href="<?= site_url("catalogue/categorie/8")?>"><img src="<?= asset_url();?>ressources/icone/timbales.png" class="icone">Timbales</a></li>
						<li><a href="<?= site_url("catalogue/categorie/14")?>"><img src="<?= asset_url();?>ressources/icone/triangle.png" class="icone">Triangles</a></li>
						<li><a href="<?= site_url("catalogue/categorie/15")?>"><img src="<?= asset_url();?>ressources/icone/xylophone.png" class="icone">Xylophones</a></li>
					</ul>
				</li>

				<li role="presentation" class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" id="menu2">Vents<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?= site_url("catalogue/categorie/16")?>"><img src="<?= asset_url();?>ressources/icone/accordeon.png" class="icone">Accordéons</a></li>
						<li><a href="<?= site_url("catalogue/categorie/17")?>"><img src="<?= asset_url();?>ressources/icone/flute.png" class="icone">Flûtes</a></li>
						<li><a href="<?= site_url("catalogue/categorie/18")?>"><img src="<?= asset_url();?>ressources/icone/flute_pan.png" class="icone">Flûte de Pans</a></li>
						<li><a href="<?= site_url("catalogue/categorie/21")?>"><img src="<?= asset_url();?>ressources/icone/saxophone.png" class="icone">Saxophones</a></li>
						<li><a href="<?= site_url("catalogue/categorie/19")?>"><img src="<?= asset_url();?>ressources/icone/trombone.png" class="icone">Trombones</a></li>
						<li><a href="<?= site_url("catalogue/categorie/20")?>"><img src="<?= asset_url();?>ressources/icone/trompe.png" class="icone">Trompes</a></li>
						<li><a href="<?= site_url("catalogue/categorie/22")?>"><img src="<?= asset_url();?>ressources/icone/trompette.png" class="icone">Trompettes</a></li>
						<li class="disabled"><a href="#"><img src="<?= asset_url();?>ressources/icone/null.png" class="icone">Harmonicas</a></li>		
					</ul>
				</li>

				<li role="presentation" class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" id="menu2">Cordes<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?= site_url("catalogue/categorie/25")?>"><img src="<?= asset_url();?>ressources/icone/harpe.png" class="icone">Harpes</a></li>
						<li><a href="<?= site_url("catalogue/categorie/24")?>"><img src="<?= asset_url();?>ressources/icone/violon.png" class="icone">Violons</a></li>
						<li><a href="<?= site_url("catalogue/categorie/23")?>"><img src="<?= asset_url();?>ressources/icone/violoncelle.png" class="icone">Violoncelles</a></li>
						<li class="disabled"><a href="#"><img src="<?= asset_url();?>ressources/icone/null.png" class="icone">Altos</a></li>
						<li class="disabled"><a href="#"><img src="<?= asset_url();?>ressources/icone/null.png" class="icone">Archets</a></li>
						<li class="disabled"><a href="#"><img src="<?= asset_url();?>ressources/icone/null.png" class="icone">Etuis et housses</a></li>
					</ul>
				</li>

				<li role="presentation" class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" id="menu2">Autres<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li class="disabled"><a href="#"><img src="<?= asset_url();?>ressources/icone/null.png" class="icone">Micro</a></li>
						<li class="disabled"><a href="#"><img src="<?= asset_url();?>ressources/icone/null.png" class="icone">Casque</a></li>
						<li class="disabled"><a href="#"><img src="<?= asset_url();?>ressources/icone/null.png" class="icone">Câbles</a></li>
						<li class="disabled"><a href="#"><img src="<?= asset_url();?>ressources/icone/null.png" class="icone">Eclairage</a></li>
						<li class="disabled"><a href="#"><img src="<?= asset_url();?>ressources/icone/null.png" class="icone">Enregistreur</a></li>
					</ul>
				</li>

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

<form id="formsearch" action="<?php echo site_url('catalogue/recherche');?>" method = "get">
<input type="text" name = "keyword" placeholder="Rechercher" id="inputsearch"/>
<button type="submit" class="btn btn-default btn-sm" id="buttonsearch"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button></form>
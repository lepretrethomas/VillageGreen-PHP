<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Village Green - Message</title>
<link rel="icon" type="image/png" sizes="96x96" href="<?= asset_url();?>ressources/logo/favicon-96x96.png">
	<link rel="stylesheet" type="text/css" href="<?= asset_url();?>css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= asset_url();?>css/villagegreen.css">	
	<script type="text/javascript" src="<?= asset_url();?>js/jquery-2.2.3.js"></script>
	<script type="text/javascript" src="<?= asset_url();?>js/bootstrap.js"></script>
	<script type="text/javascript" src="<?= asset_url();?>js/villagegreen.js"></script>
</head>

<body>
	<a href="<?= site_url("home/accueil")?>" class="nav-link">
    <div class="well well-sm">
    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
    </div>
    </a>

<div id="detailmessage">
<form id="messageupdate" action="<?=site_url("home/script_update")?>" method="post" onSubmit="return checkModif(this)">
	<div>
	<legend><h2 align="center">Message n°<?=$message->mes_id ?></h2></legend>
	</div>
		<input hidden type="texte" name="mes_id" value="<?=$message->mes_id ?>">
		<div class="form-group"><label>Nom</label><input id="nom" type="text" name="mes_nom" class="form-control" onblur="checkNomPrenom(this)" value="<?=$message->mes_nom ?>" pattern="^[a-zA-Z]{2,25}$" required></div>
		<div class="form-group"><label>Prénom</label><input id="prenom" type="text" name="mes_prenom" class="form-control" onblur="checkNomPrenom(this)" value="<?=$message->mes_prenom ?>" pattern="^[a-zA-Z]{2,25}$" required></div>
		<div class="form-group"><label>Sujet de votre message</label>
			<select class="form-control" name="mes_sujet">
				<option value="RENSEIGNEMENT" <?php if ($message->mes_sujet=="RENSEIGNEMENT") echo " selected " ?>>Renseignement</option>
				<option value="COMMANDE" <?php if ($message->mes_sujet=="COMMANDE") echo " selected " ?>>Commande</option>
				<option value="FACTURATION" <?php if ($message->mes_sujet=="FACTURATION") echo " selected " ?>>Facturation</option>
				<option value="LIVRAISON" <?php if ($message->mes_sujet=="LIVRAISON") echo " selected " ?>>Livraison</option>
				<option value="AUTRES" <?php if ($message->mes_sujet=="AUTRES") echo " selected " ?>>Autres</option>
			</select></div>
		<div class="form-group"><label>Message</label><textarea id="contenu" class="form-control" name="mes_contenu" rows="5" onblur="checkMessage(this)" value="<?=$message->mes_contenu ?>" pattern=".{2,500}$" required><?=$message->mes_contenu ?></textarea></div>
		<div class="form-group"><label>Mail</label><input id="mail" type="text" name="mes_mail" class="form-control" onblur="checkMail(this)" value="<?=$message->mes_mail ?>" pattern="^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$" required></div>
		<div class="form-group"><label>Date de la dernière mise à jour</label><input id="datemessage" type="date" name="mes_date_emission" class="form-control" value="<?=$message->mes_date_emission ?>" required></div>
		<div class="form-group"><label>Statut</label>
			<select class="form-control" name="mes_traitement">
				<option value="EN ATTENTE" <?php if ($message->mes_traitement=="EN ATTENTE") echo " selected " ?>>En attente</option>
				<option value="EN COURS DE REALISATION" <?php if ($message->mes_traitement=="EN COURS DE REALISATION") echo " selected " ?>>En cours de réalisation</option>
				<option value="TERMINEE" <?php if ($message->mes_traitement=="TERMINEE") echo " selected " ?>>Terminée</option>
			</select></div>
		<input type="hidden" id="dateUpdate" name="mes_date_resolution" class="form-control">
		<input type="submit" value="Mettre à jour" class="btn btn-default" onClick="setTimeUpdate()">
</form>

<form id="messagedelete" action="<?=site_url("home/script_delete")?>" method="post">
<input hidden type="texte" name="mes_id" value="<?=$message->mes_id ?>">
<input id="messageDEL" value="Supprimer" type="submit" class="btn btn-default btn" onClick="alerteDelete();">
</form>
<br />
    <div class="well well-sm">
    <a href="javascript:history.back()" class="nav-link"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span>Revenir à la page précédente</a>
    </div>
</div>
</body>
</html>

<script type="text/javascript" src="<?= asset_url();?>js/contact.js"></script>

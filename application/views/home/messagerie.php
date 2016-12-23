<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Village Green - Messagerie</title>
<link rel="icon" type="image/png" sizes="96x96" href="<?= asset_url();?>ressources/logo/favicon-96x96.png">
	<link rel="stylesheet" type="text/css" href="<?= asset_url();?>css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= asset_url();?>css/villagegreen.css">	
	<script type="text/javascript" src="<?= asset_url();?>js/jquery-2.2.3.js"></script>
	<script type="text/javascript" src="<?= asset_url();?>js/bootstrap.js"></script>
	<script type="text/javascript" src="<?= asset_url();?>js/villagegreen.js"></script>
</head>
<style background-color="white"></style>
<body>

</div>
    <a href="<?= site_url("home/accueil")?>" class="nav-link">
    <div class="well well-sm">
    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
    	<?php
		if ($this->session->userdata("connexionCOM")=="ok") {?>
	    <div class="topcorner"><a href="<?= site_url("user/logout")?>"><button><img src="<?= asset_url();?>ressources/logo/logout.png"></button></a>
		<?php
		echo ("<i>Se déconnecter de la session</i>");
		}
		?></div>
    </div>
    </a>

<?php 
$nbmessage=0;	
$traitement=0;
$attente=0;
$termine=0;
foreach ($allmessage->result() as $count):
	$nbmessage++;
if ($count->mes_traitement=="EN COURS DE REALISATION") {
	$traitement++;}
if ($count->mes_traitement=="EN ATTENTE") {
	$attente++;}
if ($count->mes_traitement=="TERMINEE") {
	$termine++;}
endforeach; ?>

<div id="messagerie">
	
<legend><h2 align="center">Messagerie</h2><i>
<?php
$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if ($url == 'http://dl.bienvu.net/thomasl/index.php/home/messagerie'){echo '(Liste complète)';}
if ($url == 'http://dl.bienvu.net/thomasl/index.php/home/messageriesortbyWait'){echo '(En attente)';}
if ($url == 'http://dl.bienvu.net/thomasl/index.php/home/messageriesortbyCurrent'){echo '(En cours de réalisation)';}
if ($url == 'http://dl.bienvu.net/thomasl/index.php/home/messageriesortbyEnded'){echo '(Terminé)';} ?>
</i></legend><br />

    <div id="messagerieinfo" class="well well-sm">
    <table>
	    <tr>
		    <td id="logoinbox" rowspan="5"><img src="<?= asset_url();?>ressources/logo/inbox.png"></td>
		    <td></td>
		    <td></td>
	    </tr>
	    <tr>
		    <td><a href="<?= site_url("home/messagerie")?>"><strong>Total:</strong></a></td>
		    <td><?=$nbmessage?></td>
	    </tr>
	    <tr>
		    <td><a href="<?= site_url("home/messageriesortbyWait")?>"><strong>En attente:</strong></a></td>
		    <td style='color: #40A44A'><?=$attente?></td>
	    </tr>
	    <tr>
		    <td><a href="<?= site_url("home/messageriesortbyCurrent")?>"><strong>En cours de réalisation:</strong></a></td>
		    <td style='color: #FF6A00'><?=$traitement?></td>
	    </tr>
	    <tr>
		    <td><a href="<?= site_url("home/messageriesortbyEnded")?>"><strong>Terminée:</strong></a></td>
		    <td style='color: #FF0000'><?=$termine?></td>
	    </tr>
    </table>
    </div>


<label><i>Cliquez sur le message à modifier/supprimer</i></label>
<?php foreach ($liste->result() as $message): ?>

<?php
$back="";
$couleur="";
if ($message->mes_traitement=="EN COURS DE REALISATION") {
	$back="style='background-color: #FFD8BF'";
	$couleur ="style='background-color: #FF6A00'";}
if ($message->mes_traitement=="EN ATTENTE") {
	$back="style='background-color: #BFFFC6'";
	$couleur ="style='background-color: #00FF21'";}
if ($message->mes_traitement=="TERMINEE") {
	$back="style='background-color: #FFBFBF'";
	$couleur ="style='background-color: #FF0000'";}
if ($message->mes_date_resolution=="0000-00-00") {
	$message->mes_date_resolution="NA";
}
?>


<a href="<?= site_url("home/message/$message->mes_id")?>" class="nav-link">
<div id="message" <?=$back?>>
 <b>Date d'émission:</b> <?=$message->mes_date_emission?> <span id="messageref"><b>Référence:</b> <?=$message->mes_id?></span> <br />
<b>Nom:</b> <?=$message->mes_nom?> <b>Prenom:</b> <?=$message->mes_prenom?> <br />
<b>Mail de contact:</b> <?=$message->mes_mail?> <br />
<b>Sujet:</b> <strong><?=$message->mes_sujet?></strong> <br />
<b>Message:</b> <?=$message->mes_contenu?> <br />
<b>Date de la dernière mise à jour:</b> <?=$message->mes_date_resolution?>
<div id="messagestatut" <?=$couleur?>><b>Statut:</b> <?=$message->mes_traitement?> <br /></div>
</div>
<?php endforeach; ?>

</div>
</a>
    <div class="well well-sm">
    <a href="<?= site_url("home/accueil")?>" class="nav-link"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span>Revenir à l'accueil</a>
    </div>
</body>
</html>

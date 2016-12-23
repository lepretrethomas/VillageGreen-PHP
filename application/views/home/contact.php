<form id="contact" action="<?=site_url("home/script_contact")?>" method="post" onSubmit="return check(this)">
	<div>
	<legend><h2 align="center">Contact</h2></legend>
	</div>
	<fieldset>
		<div class="form-group"><label>Nom</label><input id="nom" type="text" name="mes_nom" class="form-control" placeholder="Entrez votre nom" onblur="checkNomPrenom(this)" pattern="^[a-zA-Z]{2,25}$" required></div>
		<div class="form-group"><label>Prénom</label><input id="prenom" type="text" name="mes_prenom" class="form-control" placeholder="Entrez votre prénom" onblur="checkNomPrenom(this)" pattern="^[a-zA-Z]{2,25}$" required></div>
		<div class="form-group"><label>Sujet de votre message</label>
			<select class="form-control" name="mes_sujet">
				<option value="RENSEIGNEMENT" selected>Renseignement</option>
				<option value="COMMANDE">Commande</option>
				<option value="FACTURATION">Facturation</option>
				<option value="LIVRAISON">Livraison</option>
				<option value="AUTRES">Autres</option>
			</select></div>
		<div class="form-group"><label>Message</label><textarea id="contenu" class="form-control" name="mes_contenu" rows="5" placeholder="Ecrivez votre message" onblur="checkMessage(this)" pattern=".{2,500}$" required></textarea></div>
		<div class="form-group"><label>Mail</label><input id="mail" type="text" name="mes_mail" class="form-control" placeholder="Entrez votre adresse mail" onblur="checkMail(this)" pattern="^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$" required></div>
		<input type="hidden" id="dateMessage" name="mes_date_emission" class="form-control">
		<input type="hidden" id="statutMessage" name="mes_traitement" class="form-control" value="EN ATTENTE">

		<input type="submit" value="Envoyer" class="btn btn-default" onClick="setTime();">
	</fieldset>
</form>

<script type="text/javascript" src="<?= asset_url();?>js/contact.js"></script>


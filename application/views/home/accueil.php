<?php include ("header.php"); ?>

	<div id="promotion">
		<table>
			<tr>
				<td><img src="<?= asset_url();?>ressources/promotion/pub1.png" class="pub"></td>
				<td><img src="<?= asset_url();?>ressources/promotion/pub2.png" class="pub"></td>
			</tr>
		</table>
	</div> <!-- publicite -->

	<div id="content">
Application ANDROID mobile permettant de consulter le catalogue de produits<br />
<a href=<?= base_url();?>saveappmobile/vgmobile.apk><button type="button" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span>Download Version 1</button></a>
<a href=<?= base_url();?>saveappmobile/vgmobile2.apk><button type="button" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span>Download Version 2</button></a>

	</div> <!-- content -->

	<div id="partenaire">
		<img src="<?= asset_url();?>ressources/promotion/sponsor.png">
	</div> <!-- partenaire -->

</div> <!-- page -->

	<link rel="stylesheet" type="text/css" href="<?= asset_url();?>css/villagegreen.css">
	<script type="text/javascript" src="<?= asset_url();?>js/villagegreen.js"></script>

<?php include ("footer.php"); ?>

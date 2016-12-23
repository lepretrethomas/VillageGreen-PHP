<?php include ("application/views/produit/header.php"); ?>

<div class="well well-sm" id="titreinformation"><h3>Cahier des charges</h3></div>
  
<div id="information">
<iframe
src="<?= asset_url();?>ressources/pdf/information.pdf" width="750" height="800" align="middle">
</iframe>
</div>

</div> <!-- page -->

	<link rel="stylesheet" type="text/css" href="<?= asset_url();?>css/villagegreen.css">
	<script type="text/javascript" src="<?= asset_url();?>js/villagegreen.js"></script>

<script>
$(document).ready(function(){
  	$("#formsearch").hide();
});
</script>

<?php include ("footer.php"); ?>
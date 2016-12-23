<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
<link rel="icon" type="image/png" sizes="96x96" href="<?= asset_url();?>ressources/logo/favicon-96x96.png">
  <link rel="stylesheet" type="text/css" href="<?= asset_url();?>css/bootstrap.css">
  <title>Village Green - Portail</title>
<link rel="icon" type="image/png" sizes="96x96" href="<?= asset_url();?>ressources/logo/favicon-96x96.png">
  <script type="text/javascript" src="<?= asset_url();?>js/jquery-2.2.3.js"></script>
  <script type="text/javascript" src="<?= asset_url();?>js/bootstrap.js"></script>

</head>

<header id="portailheader">

  <div>
    <div id="mobile">
        <a href="<?= base_url();?>mobile_new/vgmobile.html" data-toggle="tooltip" data-placement="right" title="Version Mobile"><img src="<?= asset_url();?>ressources/logo/mobile_devices.png" id="mobilelogo" class="lien"></a>
    </div>
    <div id="logoinformation"><a href="<?= site_url("home/information")?>"><img src="<?= asset_url();?>ressources/logo/information1.png" id="lieninformation1"></a></div>
    <div id="logoinformation"><a href="<?= site_url("home/information")?>" data-toggle="tooltip" data-placement="right" title="Informations"><img src="<?= asset_url();?>ressources/logo/information2.png" id="lieninformation2"></a></div>
    <div id="logoprestashop"><a href="<?= base_url();?>prestashop/"><img src="<?= asset_url();?>ressources/logo/prestashop1.png" id="lienprestashop1"></a></div>
    <div id="logoprestashop"><a href="<?= base_url();?>prestashop/" data-toggle="tooltip" data-placement="right" title="Prestashop"><img src="<?= asset_url();?>ressources/logo/prestashop2.png" id="lienprestashop2"></a></div>
    <div id="social">
      <a href="http://www.twitter.com"><img src="<?= asset_url();?>ressources/socialmedia/twitter1.png" id="lientwitter1"></a>
      <a href="http://www.facebook.com"><img src="<?= asset_url();?>ressources/socialmedia/facebook1.png" id="lienfacebook1"></a>
    </div>
    <div id="social">
      <a href="http://www.twitter.com" data-toggle="tooltip" data-placement="left" title="Twitter"><img src="<?= asset_url();?>ressources/socialmedia/twitter2.png" id="lientwitter2"></a>
      <a href="http://www.facebook.com" data-toggle="tooltip" data-placement="left" title="Facebook"><img src="<?= asset_url();?>ressources/socialmedia/facebook2.png" id="lienfacebook2"></a>
    </div>
    <div id="site">
        <a href="<?= site_url("home/accueil")?>" data-toggle="tooltip" data-placement="left" title="Visiter le site"><img src="<?= asset_url();?>ressources/logo/logosimple.png" id="indexlogo" class="lien"></a>
        <img src="<?= asset_url();?>ressources/logo/blankindex.png" id="backlogo" class="logo">
    </div>
  </div>
  
</header>


<div id="mycarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
    <li data-target="#mycarousel" data-slide-to="1"></li>
    <li data-target="#mycarousel" data-slide-to="2"></li>
    <li data-target="#mycarousel" data-slide-to="3"></li>
    <li data-target="#mycarousel" data-slide-to="4"></li>
    <li data-target="#mycarousel" data-slide-to="5"></li>
    <li data-target="#mycarousel" data-slide-to="6"></li>
    <li data-target="#mycarousel" data-slide-to="7"></li>
    <li data-target="#mycarousel" data-slide-to="8"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?= asset_url();?>ressources/carousel/1.jpg") data-color="lightblue">
    </div>
    <div class="item">
      <img src="<?= asset_url();?>ressources/carousel/2.jpg") data-color="firebrick">
    </div>
    <div class="item">
      <img src="<?= asset_url();?>ressources/carousel/3.jpg") data-color="violet">
    </div>
    <div class="item">
      <img src="<?= asset_url();?>ressources/carousel/4.jpg") data-color="lightgreen">
    </div>
    <div class="item">
      <img src="<?= asset_url();?>ressources/carousel/5.jpg") data-color="tomato">
    </div>
        <div class="item">
      <img src="<?= asset_url();?>ressources/carousel/6.jpg") data-color="lightblue">
    </div>
        <div class="item">
      <img src="<?= asset_url();?>ressources/carousel/7.jpg") data-color="firebrick">
    </div>
        <div class="item">
      <img src="<?= asset_url();?>ressources/carousel/8.jpg") data-color="violet">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</body>

  <link rel="stylesheet" type="text/css" href="<?= asset_url();?>css/index.css">
  <script type="text/javascript" src="<?= asset_url();?>js/index.js"></script>
  <script type="text/javascript" src="<?= asset_url();?>js/villagegreen.js"></script>
</html>


<div class="item  col-xs-4 col-lg-4">
    <div class="thumbnail">
        <a href="<?= site_url('catalogue/detail').'/'.$produit->pro_id?>" class="nav-link"><img class="group list-group-image" src="<?= asset_url();?>ressources/produit/<?=$produit->pro_id?>.jpg" alt="" /></a>
        <div class="caption">
            <a href="<?= site_url('catalogue/detail').'/'.$produit->pro_id?>" class="nav-link"><h5 class="group inner list-group-item-heading">
                <?=$produit->pro_lib?></h5></a>
            <p class="group inner list-group-item-text">
                <?=$produit->pro_des?></p>
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <p class="lead">
                        <?=$produit->pro_pu?> €</p>
                </div>
                <div class="col-xs-12 col-md-6">
                    <a class="btn btn-success" href="#">Ajouter</a>
                </div>
            </div>
        </div>
    </div>
</div>
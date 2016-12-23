<div class="container">
    <div class="well well-sm">
        <strong>Informations sur le produit</strong>
    </div>

    <div ="information">
        <table>
            <tr>
                <td rowspan="6"><img src="<?= asset_url();?>ressources/produit/<?=$produit->pro_id?>.jpg"/></td>
                <td id="detailrow1">Rubrique</td>
                <td id="detailrow2"><a href="<?= site_url("catalogue/categorie/$produit->ru2_id")?>" class="nav-link"><?=$produit->ru2_nom?></a></td>           
            </tr>
            <tr>
                <td id="detailrow1">Libellé</td>
                <td id="detailrow2"><?=$produit->pro_lib?></td>
            </tr>
            <tr>
                <td id="detailrow1">Description</td>
                <td id="detailrow2"><?=$produit->pro_des?></td>
            </tr>
            <tr>
                <td id="detailrow1">Fournisseur</td>
                <td id="detailrow2"><?=$produit->fou_nom?></td>
            </tr>
            <tr>
                <td id="detailrow1">Prix</td>
                <td id="detailrow2"><?=$produit->pro_pu?> €</td>
            </tr>
            <tr>
                <td id="detailrow1"></td>
                <td><a class="btn btn-success" href="#">Ajouter</a></td>
            </tr>
        </table>
    </div>
<br />
    <div class="well well-sm">
    <a href="javascript:history.back()" class="nav-link"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span>Revenir sur la page précédente</a>
    </div>
</div>
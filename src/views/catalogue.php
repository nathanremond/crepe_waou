<form action="catalogue" method='POST'>
    <select name="idCategory" id="idCategory">
        <option value="0">Toutes les catégories</option>
        <?php foreach ($categories as $categorie) {?>
            <option value="<?=$categorie->getId()?>" <?php if ($selectedCategoryId == $categorie->getId()) echo 'selected'; ?>><?=$categorie->getName()?></option>
        <?php } ?>
    </select>

    <select name="idBrand" id="idBrand">
        <option value="0">Toutes les marques</option>
        <?php foreach ($brands as $brand) {?>
            <option value="<?=$brand->getId()?>" <?php if ($selectedBrandId == $brand->getId()) echo 'selected'; ?>><?=$brand->getName()?></option>
        <?php } ?>
    </select>

    <select name="idType" id="idType">
        <option value="0">Tous les types</option>
        <?php foreach ($types as $type) {?>
            <option value="<?=$type->getId()?>" <?php if ($selectedTypeId == $type->getId()) echo 'selected'; ?>><?=$type->getName()?></option>
        <?php } ?>
    </select>
    <button type='submit'>rechercher</button>
</form>

<div class='catalogue'>
<?php
foreach ($products as $product) { ?>
    <div class="article">
        <img src="<?=$product->getPicture()?>" alt="<?=$product->getName()?>" class="photo">
        <h2><?=$product->getName()?></h2>
        <p>Infos : <?=$product->getDescription()?></p>
        <p>Prix : <?=$product->getPrice()?> €</p>
        <a href="detail/<?=$product->getId()?>">Détails</a>
    </div>
<?php } ?>
</div>    
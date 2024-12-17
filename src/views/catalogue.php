<form action="catalogue" method='POST'>
    <select name="idCategory" id="idCategory">
        <option value="0">Toutes les catégories</option>
        <?php foreach ($categories as $categorie) {?>
            <option value="<?=$categorie->getId()?>" <?php if ($selectedCategoryId == $categorie->getId()) echo 'selected'; ?>><?=$categorie->getName()?></option>
        <?php } ?>
    </select>
    <button type='submit'>rechercher</button>
</form>

<div class='catalogue'>
<?php
foreach ($products as $product) { ?>
    <div class="article">
        <img src="https://picsum.photos/300/200" alt="article">
        <h2><?=$product->getName()?></h2>
        <p>Infos : <?=$product->getDescription()?></p>
        <p>Prix : <?=$product->getPrice()?> €</p>
        <a href="/detail/<?=$product->getId()?>">Détails</a>
    </div>
<?php } ?>
</div>    
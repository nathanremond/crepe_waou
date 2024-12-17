<div class="catalogue">
    <div class="article">
        <img src="<?=$product->getPicture()?>" alt="<?=$product->getName()?>" class="photo">
        <h2><?=$product->getName()?></h2>
        <p>Infos : <?=$product->getDescription()?></p>
        <p>Prix : <?=$product->getPrice()?> €</p>
        <a href="/catalogue">Catalogue</a>
    </div>
</div>


<?php
extract($data);
?>
<div class='catalogue'>
    <p><?=count($products)?></p>
<?php
foreach ($products as $product) { ?>
    <div class="article">
        <img src="https://picsum.photos/300/200" alt="article">
        <h2><?=$product->getName()?></h2>
        <p>Infos : </p>
        <p>Prix : €</p>
        <a href="/detail">Détails</a>
    </div>
<?php } ?>
</div>    
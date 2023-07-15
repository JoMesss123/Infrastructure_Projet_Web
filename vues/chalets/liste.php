
<ul>
    <?php foreach ($chalets as $chalet) {  ?> 
        <li><?= $chalet->nom ?> (<?= $chalet->description ?>)</li>
    <?php  } ?>
</ul>
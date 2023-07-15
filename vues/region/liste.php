<?php
  require_once 'controlleurs/ControlleurRegion.php';
?>

<ul>
    <?php foreach ($region as $region) {  ?> 
        <li><a href="liste_chalets_par_region.php?id=<?= $region->id ?>"><?= $region->nom ?> </a></li>
    <?php  } ?>
</ul>
<?php include_once(__DIR__ . './include/header.php'); ?>

  <main>
  
    <h1> <?php
        $ControlleurRegion=new ControlleurRegion;
        $ControlleurRegion->afficherFiche();
        ?>
</h1>
    <?php
        $ControlleurBaseChalet=new ControlleurBaseChalet;
        $ControlleurBaseChalet->afficherTableauRegion();
        ?>
	
  </main>

<?php include_once(__DIR__ . './include/footer.php'); ?>


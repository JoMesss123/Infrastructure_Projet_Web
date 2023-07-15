<?php include_once(__DIR__ . './include/header.php'); ?>

  <main>
  
    <h1>(Afficher le nom de la région ici)</h1>
    <?php
        $ControlleurActivite=new ControlleurActivite;
        $ControlleurActivite->afficherTableauRegion();
        ?>
	
  </main>

<?php include_once(__DIR__ . './include/footer.php'); ?>


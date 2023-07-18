<?php
    require_once 'controlleurs/ControlleurActivite.php';
?>
<?php include_once(__DIR__ . '/include/header.php'); ?>

  <main>
  
    <h1 class="my-4">Tous les activitées</h1>
    
    <?php
        $ControlleurActivite=new ControlleurActivite;
        $ControlleurActivite->afficherTableau();
    ?>
	
  </main>

<?php include_once(__DIR__ . '/include/footer.php'); ?>


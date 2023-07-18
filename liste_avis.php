<?php
    require_once 'controlleurs/ControlleurAvis.php';
?>
<?php include_once(__DIR__ . '/include/header.php'); ?>

  <main>
  
    <h1 class="my-4">Tous les avis</h1>
    
    <?php
        $ControlleurAvis=new ControlleurAvis;
        $ControlleurAvis->afficherTableau();
    ?>
	
  </main>

<?php include_once(__DIR__ . '/include/footer.php'); ?>


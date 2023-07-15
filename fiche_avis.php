<?php
    require_once 'controlleurs/ControlleurAvis.php';
?>


<?php include_once(__DIR__ . './include/header.php'); ?>

  <main>
  
  <?php
        $ControlleurAvis=new ControlleurAvis;
        $ControlleurAvis->afficherFiche();
    ?>
    
    

	
  </main>

<?php include_once(__DIR__ . './include/footer.php'); ?>

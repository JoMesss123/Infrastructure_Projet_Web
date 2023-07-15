<?php
    require_once 'controlleurs/ControlleurActivite.php';
?>


<?php include_once(__DIR__ . './include/header.php'); ?>

  <main>
  
  <?php
        $ControlleurActivite=new ControlleurActivite;
        $ControlleurActivite->afficherFiche();
    ?>
    
    

	
  </main>

<?php include_once(__DIR__ . './include/footer.php'); ?>

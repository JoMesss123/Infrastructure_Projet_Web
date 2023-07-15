<?php
    require_once 'controlleurs/ControlleurBaseChalet.php';
?>


<?php include_once(__DIR__ . './include/header.php'); ?>

  <main>
  
  <?php
        $ControlleurBaseChalet=new ControlleurBaseChalet;
        $ControlleurBaseChalet->afficherFiche();
    ?>
    
    

	
  </main>

<?php include_once(__DIR__ . './include/footer.php'); ?>

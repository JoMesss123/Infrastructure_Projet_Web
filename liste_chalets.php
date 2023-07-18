<?php
    require_once 'controlleurs/ControlleurBaseChalet.php';
?>
<?php include_once(__DIR__ . '/include/header.php'); ?>

  <main>
  
    <h1 class="my-4">Tous les chalets actifs</h1>
    
    <?php
        $ControlleurBaseChalet=new ControlleurBaseChalet;
        $ControlleurBaseChalet->afficherTableau();
    ?>
	
  </main>

<?php include_once(__DIR__ . '/include/footer.php'); ?>


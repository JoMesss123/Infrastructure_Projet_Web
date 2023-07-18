<?php
    require_once 'controlleurs/ControlleurBaseChalet.php';
?>

<?php include_once(__DIR__ . '/include/header.php'); ?>

  <main>
  
    <h1>Promotions (chalets actifs en promotion)</h1>
    <?php
        $ControlleurBaseChalet=new ControlleurBaseChalet;
        $ControlleurBaseChalet->afficherTableauPromo();
    ?>
	
	
  </main>

<?php include_once(__DIR__ . '/include/footer.php'); ?>


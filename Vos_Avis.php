<?php
    require_once 'controlleurs/ControlleurAvis.php';
?>


<?php include_once(__DIR__ . './include/header.php'); ?>

  <main>
  
	<h1>Administration - Module personnel</h1>
	<?php
 		if(!isset($_SESSION["utilisateur"])) {
 		 
 	?>
 	<p>Vous devez être connecté pour accéder à cette page.</p>
	 <? require 'vues/authentification/formulaire_authentification.php'; ?>
 	
 	<?php } else { ?>
		<?php
        $ControlleurAvis=new ControlleurAvis;
        $ControlleurAvis->afficherTableauAvecBoutonsAction();
    ?>
 	
 	<?php } ?>
	 
	
  	</main>

<?php include_once(__DIR__ . './include/footer.php'); ?>
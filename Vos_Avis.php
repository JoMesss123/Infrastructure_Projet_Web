<?php
    require_once 'controlleurs/ControlleurAvis.php';
  ?>


<?php include_once(__DIR__ . './include/header.php'); ?>

  <main>

	<h1>Administration de vos Avis</h1>
	<?php
 		if(!isset($_SESSION["utilisateur"])) {
 		 
 	?>
 	<p>Vous devez être connecté pour accéder à cette page.</p>
	 <? require 'vues/authentification/formulaire_authentification.php'; ?>
 	
 	<?php } else { ?>
		<? require 'ajout_avis.php'; ?>
		<?php
        $ControlleurAvis=new ControlleurAvis;
        $ControlleurAvis->afficherTableauAvecBoutonsActionUtilisateur();
    ?>
 	
 	<?php } ?>
	 
	
  	</main>

<?php include_once(__DIR__ . './include/footer.php'); ?>
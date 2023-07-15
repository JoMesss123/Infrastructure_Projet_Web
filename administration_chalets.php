

<?php include_once(__DIR__ . './include/header.php'); ?>



<main>

	<h1>Administration - Chalets</h1>

	<!-- Formulaire de connexio n -->

	<? require 'vues/authentification/formulaire_ajout_admin.php'; ?>

	<?php
 		if(!isset($_SESSION["administrateur"])) {
 		 
 	?>
	<p>Vous devez être connecté pour accéder à cette page.</p>
	

	<?php } else { ?>
		<form method="POST">
        Vous êtes connecté en tant qu'administrateur <?= $_SESSION["administrateur"] ?> 
        
    </form>
	<?php
        $ControlleurAvis=new ControlleurAvis;
        $ControlleurAvis->afficherTableauAvecBoutonsAction();
    ?>

	<?php
		$ControlleurBaseChalets=new ControlleurBaseChalet;
		$ControlleurBaseChalets->afficherTableauAvecBoutonsAction();
	?>

	<?php
	$ControlleurActivite=new ControlleurActivite;
	$ControlleurActivite->afficherTableauAvecBoutonsAction();
	?>

	<?php
	$ControlleurRegion=new ControlleurRegion;
	$ControlleurRegion->afficherTableauAvecBoutonsAction();
	?>

	

	<?php } ?>
</main>

<?php include_once(__DIR__ . './include/footer.php'); ?>
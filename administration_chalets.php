

<?php include_once(__DIR__ . '/include/header.php'); ?>



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
	<h1> Avis</h1>
	<?php
        $ControlleurAvis=new ControlleurAvis;
        $ControlleurAvis->afficherTableauAvecBoutonsAction();
    ?>

	<h1> Chalets</h1>
	<? require 'ajout_chalet.php'; ?>

	<?php
		$ControlleurBaseChalets=new ControlleurBaseChalet;
		$ControlleurBaseChalets->afficherTableauAvecBoutonsAction();
	?>

	<h1> Activités</h1>
	<? require 'ajout_activite.php'; ?>
	<?php
	$ControlleurActivite=new ControlleurActivite;
	$ControlleurActivite->afficherTableauAvecBoutonsAction();
	?>

	<h1> Régions</h1>
	<? require 'ajout_region.php'; ?>
	<?php
	$ControlleurRegion=new ControlleurRegion;
	$ControlleurRegion->afficherTableauAvecBoutonsAction();
	?>

	

	<?php } ?>
</main>

<?php include_once(__DIR__ . '/include/footer.php'); ?>
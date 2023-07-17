<?php
    require_once 'controlleurs/ControlleurAvis.php';
    
    $ControlleurAvis=new ControlleurAvis;

    if (isset($_POST['boutonSupprimer'])) {        
        $ControlleurAvis->supprimer();
    } 
?>

<?php include_once(__DIR__ . './include/header.php'); ?>

<main>
   <h1>Formulaire de surpression d'un avis</h1>

    <?php
         $ControlleurAvis->afficherFormulaireSuppression();
    ?>
<a href="Vos_Avis.php">Retour à la liste des chalets</a>

</main>

<?php include_once(__DIR__ . './include/footer.php'); ?>
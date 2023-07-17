<?php
    require_once 'controlleurs/ControlleurRegion.php';
    
    $ControlleurRegion=new ControlleurRegion;

    if (isset($_POST['boutonSupprimer'])) {        
        $ControlleurRegion->supprimer();
    } 
?>

<?php include_once(__DIR__ . './include/header.php'); ?>

<main>
   <h1>Formulaire de surpression d'une région</h1>

    <?php
         $ControlleurRegion->afficherFormulaireSuppression();
    ?>
<a href="administration_chalets.php">Retour à la liste des chalets</a>

</main>

<?php include_once(__DIR__ . './include/footer.php'); ?>
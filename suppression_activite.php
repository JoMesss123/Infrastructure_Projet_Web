<?php
    require_once 'controlleurs/ControlleurActivite.php';
    
    $ControlleurActivite=new ControlleurActivite;

    if (isset($_POST['boutonSupprimer'])) {        
        $ControlleurActivite->supprimer();
    } 
?>

<?php include_once(__DIR__ . '/include/header.php'); ?>

<main>
   <h1>Formulaire de surpression d'un avis</h1>

    <?php
         $ControlleurActivite->afficherFormulaireSuppression();
    ?>
<a href="administration_chalets.php">Retour à la liste des chalets</a>

</main>

<?php include_once(__DIR__ . '/include/footer.php'); ?>
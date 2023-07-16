<?php
    require_once 'controlleurs/ControlleurBaseChalet.php';
    
    $ControlleurBaseChalet=new ControlleurBaseChalet;

    if (isset($_POST['boutonSupprimer'])) {        
        $ControlleurBaseChalet->supprimer();
    } 
?>

<?php include_once(__DIR__ . './include/header.php'); ?>

<main>
   <h1>Formulaire de surpression d'un chalet</h1>

    <?php
         $ControlleurBaseChalet->afficherFormulaireSuppression();
    ?>
<a href="administration_chalets.php">Retour à la liste des chalets</a>

</main>

<?php include_once(__DIR__ . './include/footer.php'); ?>
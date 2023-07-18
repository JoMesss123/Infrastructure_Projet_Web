<?php
    require_once 'controlleurs/ControlleurRegion.php';
    
    $ControlleurRegion=new ControlleurRegion;

    if (isset($_POST['boutonEditer'])) {      
        $ControlleurRegion->editer();
    } 
?>

<?php include_once(__DIR__ . '/include/header.php'); ?>

<main>
   <h1>Formulaire d'édition d'une région</h1>

    <?php
         $ControlleurRegion->afficherFormulaireEdition();
    ?>

    <a href="administration_chalets.php">Retour à la liste des régions</a>

</main>

<?php include_once(__DIR__ . '/include/footer.php'); ?>


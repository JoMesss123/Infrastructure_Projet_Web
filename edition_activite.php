<?php
    require_once 'controlleurs/ControlleurActivite.php';
    
    $ControlleurActivite=new ControlleurActivite;

    if (isset($_POST['boutonEditer'])) {      
        $ControlleurActivite->editer();
    } 
?>

<?php include_once(__DIR__ . '/include/header.php'); ?>

<main>
   <h1>Formulaire d'édition d'une activité</h1>

    <?php
         $ControlleurActivite->afficherFormulaireEdition();
    ?>

    <a href="administration_chalets.php">Retour à la liste des chalets</a>

</main>

<?php include_once(__DIR__ . '/include/footer.php'); ?>
<?php
    require_once 'controlleurs/ControlleurAvis.php';
    
    $ControlleurAvis=new ControlleurAvis;

    if (isset($_POST['boutonEditer'])) {      
        $ControlleurAvis->editer();
    } 
?>

<?php include_once(__DIR__ . './include/header.php'); ?>

<main>
   <h1>Formulaire d'édition d'un avis</h1>

    <?php
         $ControlleurAvis->afficherFormulaireEdition();
    ?>

    <a href="Vos_Avis.php">Retour à la liste des avis</a>

</main>

<?php include_once(__DIR__ . './include/footer.php'); ?>
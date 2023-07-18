<?php
    require_once 'controlleurs/ControlleurBaseChalet.php';
    
    $ControlleurBaseChalet=new ControlleurBaseChalet;

    if (isset($_POST['boutonEditer'])) {      
        $ControlleurBaseChalet->editer();
    } 
?>

<?php include_once(__DIR__ . '/include/header.php'); ?>

<main>
   <h1>Formulaire d'édition d'un chalet</h1>

    <?php
         $ControlleurBaseChalet->afficherFormulaireEdition();
    ?>

    <a href="administration_chalets.php">Retour à la liste des chalets</a>

</main>

<?php include_once(__DIR__ . '/include/footer.php'); ?>
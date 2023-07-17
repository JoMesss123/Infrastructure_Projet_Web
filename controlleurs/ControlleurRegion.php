<?php

require_once './modeles/region.php';

class ControlleurRegion {

    function afficherListeDeroulanteRegion() {
        $region = modele_region::ObtenirTous();
        require  __DIR__ . '/../vues/region/liste-deroulante.php';
    }

    
    function afficherListe() {
        $region = modele_region::ObtenirTous();
        require './vues/region/liste.php';
    }

  
    function afficherTableau() {
        $region = modele_region::ObtenirTous();
        require './vues/region/tableau.php';
    }


    function afficherTableauRegion() {
        $region = modele_region::ObtenirTousRegion();
        require './vues/region/tableau-region.php';
    }

    function afficherTableauAvecBoutonsAction() {
        $region = modele_region::ObtenirTous();
        require './vues/region/tableau-avec-bouton-actions.php';
    }

    function afficherFiche() {
        if(isset($_GET["id"])) {
            $region = modele_region::ObtenirUn($_GET["id"]);
            if($region) {  
                require './vues/region/fiche.php';
            } else {
                $erreur = "Aucune région trouvée";
                require './vues/erreur.php';
            }
        } else {
            $erreur = "L'identifiant (id) du chalet à afficher est manquant dans l'url";
            require './vues/erreur.php';
        }
    }

   

    

    
    function afficherFormulaireEdition(){
        if(isset($_GET["id"])) {
            $region = modele_region::ObtenirUn($_GET["id"]);
            if($region) {  
                require './vues/region/formulaireEdition.php';
            } else {
                $erreur = "Aucune région trouvée";
                require './vues/erreur.php';
            }
        } else {
            $erreur = "L'identifiant (id) du chalet à afficher est manquant dans l'url";
            require './vues/erreur.php';
        }
    }

    
    function afficherFormulaireSuppression(){
        if(isset($_GET["id"])) {
            $region = modele_region::ObtenirUn($_GET["id"]);
            if($region) { 
                require './vues/region/formulaireSuppression.php';
            }
        } else {
            $erreur = "L'identifiant (id) de la region à afficher est manquant dans l'url";
            require './vues/erreur.php';
        }
    }

    
    function ajouter() {
        if(isset($_POST['nom']) ) {
            $message = modele_region::ajouter($_POST['nom']);
            echo $message;
        } else {
            $erreur = "Impossible d'ajouter une région. Des informations sont manquantes";
            require './vues/erreur.php';
        }
    }

   
    function editer() {
        if(isset($_GET['id'], $_POST['nom'])) {
            $message = modele_region::editer($_GET['id'],$_POST['nom']);
            echo $message;
        } else {
            $erreur = "Impossible de modifier la région. Des informations sont manquantes";
            require './vues/erreur.php';
        }
    }

   
    function supprimer() {
        if(isset($_GET['id'])) {
            $message = modele_region::supprimer($_GET['id']);
            echo $message;
        } else {
            $erreur = "Impossible de supprimer la région. Des informations sont manquantes";
            require './vues/erreur.php';
        }
    }

}

?>
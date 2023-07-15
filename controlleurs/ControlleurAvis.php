<?php

require_once './modeles/avis.php';

class ControlleurAvis {

    
    function afficherListe() {
        $avis = modele_avis::ObtenirTous();
        require './vues/avis/liste.php';
    }

  
    function afficherTableau() {
        $avis = modele_avis::ObtenirTous();
        require './vues/avis/tableau.php';
    }

    function afficherTableauAvis() {
        $avis= modele_avis::ObtenirTousActivite();
        require './vues/avis/tableau-Avis.php';
    }

    function afficherTableauAvecBoutonsAction() {
        $avis = modele_avis::ObtenirTous();
        require './vues/avis/tableau-avec-bouton-actions.php';
    }

    function afficherFiche() {
        if(isset($_GET["id"])) {
            $avis = modele_avis::ObtenirUn($_GET["id"]);
            if($avis) {  
                require './vues/avis/fiche.php';
            } else {
                $erreur = "Aucun avis trouvé";
                require './vues/erreur.php';
            }
        } else {
            $erreur = "L'identifiant (id) de l'avis à afficher est manquant dans l'url";
            require './vues/erreur.php';
        }
    }

    function afficherFicheindex() {
        $avis = modele_avis::ObtenirUnAleatoire();
    
        if ($avis) {  
            require './vues/avis/fiche-index.php';
        } else {
            $erreur = "Aucun activité trouvé";
            require './vues/erreur.php';
        }
    }

    function afficherFormulaireEdition(){
        if(isset($_GET["id"])) {
            $avis = modele_avis::ObtenirUn($_GET["id"]);
            if($avis) {  
                require './vues/avis/formulaireEdition.php';
            } else {
                $erreur = "Aucun avis trouvé";
                require './vues/erreur.php';
            }
        } else {
            $erreur = "L'identifiant (id) de l'avis à afficher est manquant dans l'url";
            require './vues/erreur.php';
        }
    }

    
    function afficherFormulaireSuppression(){
        if(isset($_GET["id"])) {
            $avis = modele_avis::ObtenirUn($_GET["id"]);
            if($avis) { 
                require './vues/avis/formulaireSuppression.php';
            }
        } else {
            $erreur = "L'identifiant (id) de l'avis à afficher est manquant dans l'url";
            require './vues/erreur.php';
        }
    }

    
    function ajouter() {
        if(isset($_GET['id'],$_POST['nom']) && isset($_POST['prenom']) && isset($_POST['date_avis']) && isset($_POST['description']) && isset($_POST['id_activite'])) {
            $message = modele_avis::ajouter($_GET['id'],$_POST['nom'], $_POST['prenom'], $_POST['date_avis'], $_POST['description'], $_POST['id_activite']);
            echo $message;
        } else {
            $erreur = "Impossible d'ajouter un avis. Des informations sont manquantes";
            require './vues/erreur.php';
        }
    }

   
    function editer() {
        if(isset($_GET['id'],$_POST['nom']) && isset($_POST['prenom']) && isset($_POST['date_avis']) && isset($_POST['description']) && isset($_POST['id_activite'])) {
            $message = modele_avis::editer($_GET['id'],$_POST['nom'], $_POST['prenom'], $_POST['date_avis'], $_POST['description'], $_POST['id_activite']);
            echo $message;
        } else {
            $erreur = "Impossible de modifier l'avis'. Des informations sont manquantes";
            require './vues/erreur.php';
        }
    }

   
    function supprimer() {
        if(isset($_GET['id'])) {
            $message = modele_avis::supprimer($_GET['id']);
            echo $message;
        } else {
            $erreur = "Impossible de supprimer l'avis. Des informations sont manquantes";
            require './vues/erreur.php';
        }
    }

}

?>
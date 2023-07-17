<?php

require_once './modeles/activite.php';

class ControlleurActivite {

    
    function afficherListe() {
        $activite = modele_activite::ObtenirTous();
        require './vues/activite/liste.php';
    }

    function afficherListeDeroulanteActivite() {
        $activite = modele_activite::ObtenirTous();
        require  __DIR__ . '/../vues/activite/liste-deroulante.php';
    }


  
    function afficherTableau() {
        $activite = modele_activite::ObtenirTous();
        require './vues/activite/tableau.php';
    }

    function afficherTableauRegion() {
        $activite= modele_activite::ObtenirTousRegion();
        require './vues/activite/tableau-region.php';
    }

    function afficherTableauAvecBoutonsAction() {
        $activite = modele_activite::ObtenirTous();
        require './vues/activite/tableau-avec-bouton-actions.php';
    }

    function afficherFiche() {
        if(isset($_GET["id"])) {
            $activite = modele_activite::ObtenirUn($_GET["id"]);
            if($activite) {  
                require './vues/activite/fiche.php';
            } else {
                $erreur = "Aucun activité trouvé";
                require './vues/erreur.php';
            }
        } else {
            $erreur = "L'identifiant (id) du chalet à afficher est manquant dans l'url";
            require './vues/erreur.php';
        }
    }

    function afficherFicheindex() {
        $activite = modele_activite::ObtenirUnAleatoire();
    
        if ($activite) {  
            require './vues/activite/fiche-index.php';
        } else {
            $erreur = "Aucun activité trouvé";
            require './vues/erreur.php';
        }
    }

    function afficherFormulaireEdition(){
        if(isset($_GET["id"])) {
            $activite = modele_activite::ObtenirUn($_GET["id"]);
            if($activite) {  
                require './vues/activite/formulaireEdition.php';
            } else {
                $erreur = "Aucun activité trouvé";
                require './vues/erreur.php';
            }
        } else {
            $erreur = "L'identifiant (id) du chalet à afficher est manquant dans l'url";
            require './vues/erreur.php';
        }
    }

    
    function afficherFormulaireSuppression(){
        if(isset($_GET["id"])) {
            $activite = modele_activite::ObtenirUn($_GET["id"]);
            if($activite) { 
                require './vues/activite/formulaireSuppression.php';
            }
        } else {
            $erreur = "L'identifiant (id) de l'activité à afficher est manquant dans l'url";
            require './vues/erreur.php';
        }
    }

    
    function ajouter() {
        if(isset($_POST['nom_activite']) && isset($_POST['description_activite']) && isset($_POST['hiver_activite']) && isset($_POST['ete_activite']) && isset($_POST['fk_region'])) {
            $message = modele_activite::ajouter($_POST['nom_activite'], $_POST['description_activite'], $_POST['hiver_activite'], $_POST['ete_activite'], $_POST['fk_region']);
            echo $message;
        } else {
            $erreur = "Impossible d'ajouter un activité. Des informations sont manquantes";
            require './vues/erreur.php';
        }
    }

   
    function editer() {
        if(isset($_GET['id'], $_POST['nom_activite']) && isset($_POST['description_activite']) && isset($_POST['hiver_activite']) && isset($_POST['ete_activite']) && isset($_POST['fk_region'])) {
            $message = modele_activite::editer($_GET['id'],$_POST['nom_activite'], $_POST['description_activite'], $_POST['hiver_activite'], $_POST['ete_activite'], $_POST['fk_region']);
            echo $message;
        } else {
            $erreur = "Impossible de modifier l'activité'. Des informations sont manquantes";
            require './vues/erreur.php';
        }
    }

   
    function supprimer() {
        if(isset($_GET['id'])) {
            $message = modele_activite::supprimer($_GET['id']);
            echo $message;
        } else {
            $erreur = "Impossible de supprimer l'activité. Des informations sont manquantes";
            require './vues/erreur.php';
        }
    }

}

?>
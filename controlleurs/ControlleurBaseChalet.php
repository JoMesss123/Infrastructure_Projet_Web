<?php

require_once './modeles/chalets.php';

class ControlleurBaseChalet {

    
    function afficherListe() {
        $chalets = modele_chalet::ObtenirTous();
        require './vues/chalets/liste.php';
    }

  
    function afficherTableau() {
        $chalets = modele_chalet::ObtenirTous();
        require './vues/chalets/tableau.php';
    }

    function afficherTableauPromo() {
        $chalets = modele_chalet::ObtenirTousPromo();
        require './vues/chalets/tableau-promo.php';
    }

    function afficherTableauRegion() {
        $chalets = modele_chalet::ObtenirTousRegion();
        require './vues/chalets/tableau-region.php';
    }

    function afficherTableauAvecBoutonsAction() {
        $chalets = modele_chalet::ObtenirTous();
        require './vues/chalets/tableau-avec-bouton-actions.php';
    }

    function afficherFiche() {
        if(isset($_GET["id"])) {
            $chalet = modele_chalet::ObtenirUn($_GET["id"]);
            if($chalet) {  
                require './vues/chalets/fiche.php';
            } else {
                $erreur = "Aucun chalet trouvé";
                require './vues/erreur.php';
            }
        } else {
            $erreur = "L'identifiant (id) du chalet à afficher est manquant dans l'url";
            require './vues/erreur.php';
        }
    }

    function afficherFichePromo() {
        $chalet = modele_chalet::ObtenirUnAleatoire();
    
        if ($chalet) {  
            require './vues/chalets/fiche-promo.php';
        } else {
            $erreur = "Aucun chalet trouvé";
            require './vues/erreur.php';
        }
    }

    

    
    function afficherFormulaireEdition(){
        if(isset($_GET["id"])) {
            $chalet = modele_chalet::ObtenirUn($_GET["id"]);
            if($chalet) {  
                require './vues/chalet/formulaireEdition.php';
            } else {
                $erreur = "Aucun chalet trouvé";
                require './vues/erreur.php';
            }
        } else {
            $erreur = "L'identifiant (id) du chalet à afficher est manquant dans l'url";
            require './vues/erreur.php';
        }
    }

    
    function afficherFormulaireSuppression(){
        if(isset($_GET["id"])) {
            $chalet = modele_chalet::ObtenirUn($_GET["id"]);
            if($chalet) { 
                require './vues/chalets/formulaireSuppression.php';
            }
        } else {
            $erreur = "L'identifiant (id) du chalet à afficher est manquant dans l'url";
            require './vues/erreur.php';
        }
    }

    
    function ajouter() {
        if(isset($_GET['id'],$_POST['nom']) && isset($_POST['description']) && isset($_POST['personne_max']) && isset($_POST['prix_haute_saison']) && isset($_POST['prix_basse_saison']) && isset($_POST['actif']) && isset($_POST['promo ']) && isset($_POST['date_inscription']) && isset($_POST['fk_region'])) {
            $message = modele_chalet::ajouter($_GET['id'],$_POST['nom'], $_POST['description'], $_POST['personne_max'], $_POST['prix_haute_saison'], $_POST['prix_basse_saison'], $_POST['actif'], $_POST['promo '], $_POST['date_inscription'], $_POST['fk_region']);
            echo $message;
        } else {
            $erreur = "Impossible d'ajouter un chalet. Des informations sont manquantes";
            require './vues/erreur.php';
        }
    }

   
    function editer() {
        if(isset($_GET['id'], $_POST['nom']) && isset($_POST['description']) && isset($_POST['personne_max']) && isset($_POST['prix_haute_saison']) && isset($_POST['prix_basse_saison']) && isset($_POST['actif']) && isset($_POST['promo ']) && isset($_POST['date_inscription']) && isset($_POST['fk_region'])) {
            $message = modele_chalet::editer($_GET['id'],$_POST['nom'], $_POST['description'], $_POST['personne_max'], $_POST['prix_haute_saison'], $_POST['prix_basse_saison'], $_POST['actif'], $_POST['promo '], $_POST['date_inscription'], $_POST['fk_region']);
            echo $message;
        } else {
            $erreur = "Impossible de modifier le chalet. Des informations sont manquantes";
            require './vues/erreur.php';
        }
    }

   
    function supprimer() {
        if(isset($_GET['id'])) {
            $message = modele_chalet::supprimer($_GET['id']);
            echo $message;
        } else {
            $erreur = "Impossible de supprimer le chalet. Des informations sont manquantes";
            require './vues/erreur.php';
        }
    }

}

?>
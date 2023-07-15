<?php

require_once './modeles/authentificationAdmin.php';

class ControlleurAuthentificationAdmin {

    
    function ajouter() {
        if(isset($_POST['administrateur_ajout']) && isset($_POST['mot_de_passe_ajout']) && isset($_POST['courriel_ajout'])) {
            $message = modele_authentificationAdmin::ajouter($_POST['administrateur_ajout'], $_POST['mot_de_passe_ajout'], $_POST['courriel_ajout']);
            echo $message;
        } else {
            $erreur = "Impossible d'ajouter un administrateur. Des informations sont manquantes";
            require './vues/erreur.php';
        }
    }

    function connecter() {
        if(isset($_POST['administrateur_login']) && isset($_POST['mot_de_passe_login'])) {
            $administrateur = modele_authentificationAdmin::ObtenirUn($_POST['administrateur_login']);
            if($administrateur) {            
                             
                if(password_verify($_POST['mot_de_passe_login'], $administrateur-> mot_de_passe)) {
                
                    $_SESSION['administrateur'] = $_POST['administrateur_login'];
                    header('Location: .');
                    
                     
                } else {
                    $erreur = "<b class='erreur'>Le mot de passe est incorrect</b>";
                    require './vues/erreur.php';
                }
            } else {
                $erreur = "L'administrateur n'existe pas";
                require './vues/erreur.php';
            }
        } else {
            $erreur = "Impossible de se connecter. Des informations sont manquantes";
            require './vues/erreur.php';
        }
    }


    function deconnecter() {
        if(isset($_SESSION["administrateur"])) {
            unset($_SESSION["administrateur"]);
            header('Location: .');
           
        }
    }
}
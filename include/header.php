<?php
  session_start();
?>

<?php
    require_once 'controlleurs/ControlleurAvis.php';
?>

<?php
	require_once 'controlleurs/ControlleurBaseChalet.php';
?>

<?php
	require_once 'controlleurs/ControlleurActivite.php';
?>

<?php 
	require_once 'controlleurs/authentificationAdmin.php'; 
?>

<?php
  require_once 'controlleurs/ControlleurRegion.php';
?>

<!DOCTYPE html>
<html lang="fr-CA">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description " content="Les Chalets Québécois-test de manipulation de base de donnée">
  <meta name="author" content="Jonathan Claes">




  <title>Titre de la page (défi! rendre ce titre dynamique selon la page sélectionnée)</title>

  <link rel="stylesheet" href="css/styles.css">
</head>

<body class="light-mode">

  <!-- Navigation -->
  <header>
    <nav>
      <div class="menu-icon">
        
        <img src="https://picsum.photos/id/13/80" alt="logo">
        <i class="fas fa-bars fa-2x"></i>
        <ul>
          <li><a href="index.php">Accueil</a></li>
          <li><a href="liste_chalets.php">Chalets à louer</a></li>
          <li>
            <a href="#">Chalets par région &nbsp;<i class="arrow down"></i></a>
            <ul>
              <?php
        $ControlleurRegion=new ControlleurRegion;
        $ControlleurRegion->afficherliste();
        ?>

            </ul>
          </li>
          <li><a href="liste_chalets_en_promotion.php">Chalets en promotion</a></li>
          <li>
            <a href="liste_activite_index.php">Activités &nbsp;<i class="arrow down"></i></a>
            <ul>
              <li><a href="liste_activite.php">Activitées</a></li>
              <li><a href="liste_avis.php">Avis</a></li>


            </ul>
          </li>
          <?php
        if(!isset($_SESSION["utilisateur"] )) {
          ?>
          <?php
             } else {
              ?>
          <li>
            <a href="">Votre Espace &nbsp;<i class="arrow down"></i></a>
            <ul>

              <li><a href="Vos_Avis.php">Vos Avis</a></li>
            </ul>
          </li>
          <?php
            }
              ?>
          <?php
        if(!isset($_SESSION["administrateur"] )) {
          ?>
          <?php
             } else {
              ?>
          <li>
            <a href="">Votre Espace &nbsp;<i class="arrow down"></i></a>
            <ul>

              <li><a href="administration_chalets.php">Administration</a></li>
            </ul>
          </li>
          <?php
            }
              ?>
        </ul>
      </div>

      <!-- Formulaire de connexion -->
      <div class="connexion">

        <?php
      if(!isset($_SESSION["utilisateur"])) {
        ?>

        <? require 'vues/authentification/formulaire_authentification.php'; ?>
        <? require 'vues/authentification/formulaire_ajout.php'; ?>
        <?php
      } else {
        ?>
        <? require 'vues/authentification/formulaire_authentification.php'; ?>
        <?php
      }
      ?>
        <? require 'vues/authentification/formulaire_authentification_admin.php'; ?>
      </div>
    </nav>
    <hr>
  </header>
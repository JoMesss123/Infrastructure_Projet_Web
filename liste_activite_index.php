<?php
    require_once 'controlleurs/ControlleurActivite.php';
?>

<?php include_once(__DIR__ . '/include/header.php'); ?>

<main>
    <h1>Les activitées dans les régions de nos chalets</h1>

    <!-- Chalets sous forme de cartes -->
    <!-- Affiche 6 chalets ACTIFS et en PROMOTION en ordre aléatoire. Indice : https://www.mysqltutorial.org/select-random-records-database-table.aspx  -->
    <div class="flex">
      <div class="card">
        <?php
        $ControlleurActivite=new ControlleurActivite;
        $ControlleurActivite->afficherFicheindex();
        ?>
        
    
    
        
      </div>

      <div class="card">
      <?php
        $ControlleurActivite=new ControlleurActivite;
        $ControlleurActivite->afficherFicheindex();
        ?>
        
       
        
      </div>

      <div class="card">
      <?php
        $ControlleurActivite=new ControlleurActivite;
        $ControlleurActivite->afficherFicheindex();
        ?>
    
    
        
      </div>

      <div class="card">
      <?php
        $ControlleurActivite=new ControlleurActivite;
        $ControlleurActivite->afficherFicheindex();
        ?>
        
    
    
        
      </div>

      <div class="card">
      <?php
        $ControlleurActivite=new ControlleurActivite;
        $ControlleurActivite->afficherFicheindex();
        ?>
        
    
    
        
      </div>

      <div class="card">
      <?php
        $ControlleurActivite=new ControlleurActivite;
        $ControlleurActivite->afficherFicheindex();
        ?>
        
    
    
        
      </div>


  </div>

</main>

<?php include_once(__DIR__ . '/include/footer.php'); ?>

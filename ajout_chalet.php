<?php
    require_once 'controlleurs/ControlleurBaseChalet.php';
    $controlleurBaseChalet=new ControlleurBaseChalet;
    if (isset($_POST['boutonAjouterChalet'])) {        
        
        $controlleurBaseChalet->ajouter();
    }
?>


<dialog id="dialog_ajout_chalet"> 
<main>
  <h1>Ajouter un chalet</h1>
<form method="POST">
  <div>
    <div>
      <label for="nom">nom *</label>      
      <input type="text" id="nom" name="nom" required maxlength="50">
    </div>
    <div>
      <label for="description">description *</label>    
      <input type="text" id="description" name="description" >
    </div>
  </div>

  <div>
    <div>
      <label for="personnes_max">personne maximun *</label>     
      <input type="number" step="1" id="personnes_max" name="personnes_max" required>
    </div>
    <div>
      <label for="prix_haute_saison">prix haute saison *</label>      
      <input type="number" step="1" id="prix_haute_saison" name="prix_haute_saison" required>
    </div>
    <div>
      <label for="prix_basse_saison">prix basse saison</label>      
      <input type="number" id="prix_basse_saison" name="prix_basse_saison" required>
    </div>
    <div>
      <label for="actif">actif *</label>      
      <input type="number" id="actif" name="actif" required>
    </div>
    <div>
      <label for="promo">promo *</label>      
      <input type="number" id="promo" name="promo" required>
    </div>
    <div>
      <label for="date_inscription">date d'inscription *</label>    
      <input type="date" id="date_inscription" name="date_inscription" required>
    <div>
      <label for="fk_region">fk region *</label>      
      <?php
                $controlleurRegion=new ControlleurRegion;
                $controlleurRegion->afficherListeDeroulanteRegion();
            ?>
    </div>
    <div>
      <label for="id_picsum">picsum *</label>      
      <input type="number" id="id_picsum" name="id_picsum" required>
    </div>   
  </div>

  <button name="boutonAjouterChalet" type="submit">Ajouter le chalet</button><br>
</form>


</div>
    
<a href="administration_chalets.php">Retour à la liste des régions</a>

</main>

</dialog>
<button onclick="document.getElementById('dialog_ajout_chalet').showModal();">Ajouter</button>




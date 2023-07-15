<?php
    require_once 'controlleurs/ControlleurBaseChalet.php';

    if (isset($_POST['boutonAjouter'])) {        
        $controlleurBaseChalet=new ControlleurBaseChalet;
        $controlleurBaseChalet->ajouter();
    }
?>
<dialog id="dialog_ajout_chalet"> 
  <h1>Ajouter un chalet</h1>

<form method="POST">
  <div>
    <div>
      <label for="code">nom *</label>
      <!-- Attention! Vos validations doivent être cohérentes avec le champ correspondant dans la BD! -->
      <input type="text" id="nom" name="nom" required maxlength="50">
    </div>
    <div>
      <label for="nom">description *</label>
      <!-- Attention! Vos validations doivent être cohérentes avec le champ correspondant dans la BD! -->
      <input type="text" id="description" name="description" required minlength="2" maxlength="200">
    </div>
  </div>

  <div>
    <div>
      <label for="personne_max">personne maximun *</label>
      <!-- Attention! Vos validations doivent être cohérentes avec le champ correspondant dans la BD! -->
      <input type="number" step="1" id="personne_max" name="personne_max" required>
    </div>
    <div>
      <label for="prix_haute_saison">prix haute saison *</label>
      <!-- Attention! Vos validations doivent être cohérentes avec le champ correspondant dans la BD! -->
      <input type="number" step=".01" id="prix_haute_saison" name="prix_haute_saison" required>
    </div>
    <div>
      <label for="prix_basse_saison">prix basse saison</label>
      <!-- Attention! Vos validations doivent être cohérentes avec le champ correspondant dans la BD! -->
      <input type="number" id="prix_basse_saison" name="prix_basse_saison" required>
    </div>
    <div>
      <label for="actif">actif *</label>
      <!-- Attention! Vos validations doivent être cohérentes avec le champ correspondant dans la BD! -->
      <input type="number" id="actif" name="actif" required>
    </div>
    <div>
      <label for="promo">promo *</label>
      <!-- Attention! Vos validations doivent être cohérentes avec le champ correspondant dans la BD! -->
      <input type="number" id="promo" name="promo" required>
    </div>
    <div>
      <label for="id_region">id region *</label>
      <!-- Attention! Vos validations doivent être cohérentes avec le champ correspondant dans la BD! -->
      <input type="number" id="id_region" name="id_region" required>
    </div>
    <div>
      <label for="id_picsum">picsum *</label>
      <!-- Attention! Vos validations doivent être cohérentes avec le champ correspondant dans la BD! -->
      <input type="number" id="id_picsum" name="id_picsum" required>
    </div>
    

  </div>

  <button name="boutonAjouter" type="submit">Ajouter le chalet</button><br>
</form>


</div>
    
</dialog>
<button onclick="document.getElementById('dialog_ajout_chalet').showModal();">Ajouter un chalet</button>
	



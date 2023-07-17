<?php
    require_once 'controlleurs/ControlleurActivite.php';
    
    $ControlleurActivite=new ControlleurActivite;

    if (isset($_POST['boutonAjouterActivite'])) {      
        $ControlleurActivite->ajouter();
    } 
?>

<dialog id="dialog_ajout_activite"> 

<main>

  <h1>Ajouter d'un activité</h1>

<form method="POST">
  <div>
    <div>
      <label for="nom_activite">nom *</label>
      <!-- Attention! Vos validations doivent être cohérentes avec le champ correspondant dans la BD! -->
      <input type="text" id="nom_activite" name="nom_activite" required maxlength="50">
    </div>
    <div>
      <label for="description_activite">description *</label>
      <input type="text" id="description_activite" name="description_activite" required maxlength="50">
    </div>
    <div>
      <label for="hiver_activite">hiver *</label>
      <input type="number" step="1" id="hiver_activite" name="hiver_activite" required>
    </div>
    <div>
      <label for="ete_activite">été *</label>
      <input type="number" step="1" id="ete_activite" name="ete_activite" required maxlength="50">
    </div>
    <div>
      <label for="fk_region">region *</label>
      <?php
                $controlleurRegion=new ControlleurRegion;
                $controlleurRegion->afficherListeDeroulanteRegion();
            ?>
    </div>
    

    

  <button name="boutonAjouterActivite" type="submit">Ajouter l'activité</button><br>
</form>


</div>
<a href="administration_chalets.php">Retour à la liste des chalets</a>

</main>

</dialog>
<button onclick="document.getElementById('dialog_ajout_activite').showModal();">Ajouter</button>




    




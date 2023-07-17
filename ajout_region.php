<?php
    require_once 'controlleurs/ControlleurRegion.php';
    
    $ControlleurRegion=new ControlleurRegion;

    if (isset($_POST['boutonAjouterRegion'])) {      
        $ControlleurRegion->ajouter();
    } 
?>

<dialog id="dialog_ajout_region"> 

<main>

  <h1>Ajouter d'une Region</h1>

<form method="POST">
  <div>
    <div>
      <label for="nom">nom *</label>
      <!-- Attention! Vos validations doivent être cohérentes avec le champ correspondant dans la BD! -->
      <input type="text" id="nom" name="nom" required maxlength="50">
    </div>
    

  <button name="boutonAjouterRegion" type="submit">Ajouter la région</button><br>
</form>


</div>
<a href="administration_chalets.php">Retour à la liste des régions</a>

</main>

</dialog>
<button onclick="document.getElementById('dialog_ajout_region').showModal();">Ajouter</button>




    




<?php
    require_once 'controlleurs/ControlleurAvis.php';
    
    $ControlleurAvis=new ControlleurAvis;

    if (isset($_POST['boutonAjouterAvis'])) {      
        $ControlleurAvis->ajouter();
    } 
?>

<dialog id="dialog_ajout_avis"> 

<main>

  <h1>Ajouter d'un avis</h1>

<form method="POST">
  <div>
    <div>
      <label for="nom">nom *</label>
      <!-- Attention! Vos validations doivent être cohérentes avec le champ correspondant dans la BD! -->
      <input type="text" id="nom" name="nom" required maxlength="50">
    </div>
    <div>
      <label for="prenom">prenom *</label>
      <input type="text" id="prenom" name="prenom" required maxlength="50">
    </div>
    <div>
      <label for="date_avis">date_avis *</label>
      <input type="date" id="date_avis" name="date_avis" required>
    </div>
    <div>
      <label for="description">description *</label>
      <input type="text" id="description" name="description" required maxlength="50">
    </div>
    <div>
      <label for="id_activite">activite *</label>
      <?php
                $controlleurActivite=new ControlleurActivite;
                $controlleurActivite->afficherListeDeroulanteActivite();
            ?>
    </div>
    <div>
      <label for="utilisateur">utilisateur *</label>
      <input type="number" id="utilisateur" name="utilisateur" required>
    </div>

    

  <button name="boutonAjouterAvis" type="submit">Ajouter l'avis'</button><br>
</form>


</div>
<a href="Vos_avis.php">Retour à la liste des avis</a>

</main>

</dialog>
<button onclick="document.getElementById('dialog_ajout_avis').showModal();">Ajouter</button>




    




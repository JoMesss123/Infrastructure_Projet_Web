<div class="card">
  <img src="https://picsum.photos/200" alt="une photo aléatoire">
  <div class="container">
    <h3><b>Nom  : <?= $avis->nom ?></b></h3>
    <h3>Prénom ;<?= $avis->prenom ?>$</h3>
    <p>Id de l'avis: <?= $avis->id ?></p>
  </div>
</div>

<form method="POST">
    <button name="boutonSupprimer" type="submit">Supprimer l'activitée'</button><br>
</form>
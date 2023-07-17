<div class="card">
  <img src="https://picsum.photos/200" alt="une photo aléatoire">
  <div class="container">
    <h3><b>Nom de l'Activité : <?= $activite->nom_activite ?></b></h3>
    <h4>region: <?= $activite->nom_region ?></h4>
  </div>
</div>

<form method="POST">
    <button name="boutonSupprimer" type="submit">Supprimer l'activité</button><br>
</form>
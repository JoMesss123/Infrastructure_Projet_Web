<div class="card">
  <img src="https://picsum.photos/200" alt="une photo aléatoire">
  <div class="container">
    <h3><b>Nom de l'activité : <?= $activite->nom_activite ?></b></h3>
    <h4>description: <?= $activite->description_activite ?></h4>
    <p>hiver: <?= $activite->hiver_activite ?></p>
    <p>ete: <?= $activite->ete_activite ?></p>    
    <p>La région: <?= $activite->nom_region ?></p>
  </div>
</div>
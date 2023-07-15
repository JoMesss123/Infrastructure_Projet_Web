<div class="card">
  <img src="https://picsum.photos/200" alt="une photo aléatoire">
  <div class="container">
    <h3><b> <?= $activite->nom_activite ?></b></h3>
    <h4>description: <?= $activite->description_activite ?></h4>
    <p>activite hivernal: <?= $activite->hiver_activite?></p>
    <p>activite estival: <?= $activite->ete_activite ?></p>    
    <p>La région:<p> <?= $activite->nom_region ?></p>
</p>
    <a href="fiche_activite.php?id=<?= $activite->id ?>">Pour en savoir plus</a>
  </div>
</div>
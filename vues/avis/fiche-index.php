<div class="card">
  <img src="https://picsum.photos/200" alt="une photo aléatoire">
  <div class="container">
    <h3><b> <?= $avis->nom ?></b></h3>
    <h3>prenom <?= $avis->prenom ?></h3>
    <p>date de l'avis: <?= $avis->date_avis?></p>
    <p>description: <?= $avis->description ?></p>    
    <p>Activitée:<p> <?= $avis->nom_activite ?></p>
</p>
    <a href="fiche_avis.php?id=<?= $avis->id ?>">Pour en savoir plus</a>
  </div>
</div>
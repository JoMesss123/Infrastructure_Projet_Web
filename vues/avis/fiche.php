<div class="card">
  <img src="https://picsum.photos/200" alt="une photo aléatoire">
  <div class="container">
  <h3><b> <?= $avis->nom ?></b></h3>
    <h3> <?= $avis->prenom ?></h3>
    <p>date de l'avis: <?= $avis->date_avis?></p>
    <p>description: <?= $avis->description ?></p>    
    <p>Activitée:<p> <?= $avis->nom_activite ?></p>
  </div>
</div>
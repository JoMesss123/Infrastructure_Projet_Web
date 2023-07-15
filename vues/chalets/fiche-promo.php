<div class="card">
  <img src="https://picsum.photos/<?= $chalet->id_picsum ?>" alt="une photo aléatoire">
  <div class="container">
    <h3><b> <?= $chalet->nom ?></b></h3>
    <h4>description: <?= $chalet->description ?></h4>
    <p>Le nombre de personne maximun: <?= $chalet->personnes_max ?></p>
    <p>Prix a partir de: <?= $chalet->prix_basse_saison ?></p>    
    <p>La date d'inscription: <?= $chalet->date_inscription ?></p>
    <p>La région:<p> <?= $chalet->nom_region ?></p>
</p>
    <a href="fiche_chalet.php?id=<?= $chalet->id ?>">Pour en savoir plus</a>
  </div>
</div>
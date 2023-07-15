<div class="card">
  <img src="https://picsum.photos/<?= $chalet->id_picsum ?>" alt="une photo aléatoire">
  <div class="container">
    <h3><b>Nom du chalet : <?= $chalet->nom ?></b></h3>
    <h4>description: <?= $chalet->description ?></h4>
    <p>Le nombre de personne maximun: <?= $chalet->personnes_max ?></p>
    <p>Le prix de la haute saison: <?= $chalet->prix_haute_saison ?></p>
    <p>Le prix de la basse saison: <?= $chalet->prix_basse_saison ?></p>
    <p>actif: <?= $chalet->actif ?></p>
    <p>promo: <?= $chalet->promo ?></p>
    <p>La date d'inscription: <?= $chalet->date_inscription ?></p>
    <p>La région: <?= $chalet->nom_region ?></p>
  </div>
</div>
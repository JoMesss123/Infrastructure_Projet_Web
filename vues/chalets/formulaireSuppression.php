
<div class="card">
  <img src="https://picsum.photos/<?= $chalet->id_picsum ?>" alt="une photo aléatoire">
  <div class="container">
    <h3><b>Nom du chalet : <?= $chalet->nom ?></b></h3>
    <h4>actif: <?= $chalet->actif ?></h4>
  </div>
</div>

<form method="POST">
    <button name="boutonSupprimer" type="submit">Supprimer le chalet</button><br>
</form>
<!-- Affichage en mode "liste" -->
<h2>Affichage en mode "liste"</h2>
<ul>
    <?php foreach ($avis as $avis) {  ?> 
        <li><?= $avis->nom ?> (<?= $avis->prenom ?>)</li>
        <li><?= $avis->date_avis ?></li>
        <li><?= $avis->description ?></li>
        <li><?= $avis->id_activite ?></li>
    <?php  } ?>
</ul>
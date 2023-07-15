<!-- Affichage en mode "liste" -->
<h2>Affichage en mode "liste"</h2>
<ul>
    <?php foreach ($activites as $activite) {  ?> 
        <li><?= $activite->nom_activite ?> (<?= $activite->description_activite ?>)</li>
    <?php  } ?>
</ul>
<!-- Affichage en mode "tableau" -->

<table>
    <tr>
        <th>nom</th>        
        <th>description</th>        
        <th>activité hivernale</th>        
        <th>activité estival</th>       
        <th>region</th>

    </tr>

    <?php
        foreach ($activite as $activite) {
    ?>
        <tr>
            <td><?= $activite->nom_activite ?></td>
            <td><?= $activite->description_activite ?></td>
            <td><?= $activite->hiver_activite ?></td>
            <td><?= $activite->ete_activite ?></td>
            <td><?= $activite->nom_region ?></td>

            <td>
                <a href="fiche_chalet.php?id=<?= $chalets->id ?>">Afficher</a>
                | 
                <a href="edition_chalet.php?id=<?= $chalets->id ?>">Modifier</a> 
                | 
                <a href="suppression_chalet.php?id=<?= $chalets->id ?>">Supprimer</a>
            </td>
        </tr>
    <?php
        }
    ?>
</table>
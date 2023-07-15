
<table>
    <tr>
        <th>nom</th>        
        <th>description</th>        
        <th>personne max</th>        
        <th>prix haute saison</th>
        <th>prix basse saison</th>
        <th>actif</th>
        <th>promo</th>
        <th>date inscription</th>
        <th>fk region</th>

    </tr>

    <?php
        foreach ($chalets as $chalets) {
    ?>
        <tr>
            <td><?= $chalets->nom ?></td>
            <td><?= $chalets->description?></td>
            <td><?= $chalets->personnes_max ?></td>
            <td><?= $chalets->prix_haute_saison ?></td>
            <td><?= $chalets->prix_basse_saison ?></td>
            <td><?= $chalets->actif ?></td>
            <td><?= $chalets->promo ?></td>
            <td><?= $chalets->date_inscription ?></td>
            <td><?= $chalets->nom_region ?>></td>
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
<!-- Affichage en mode "tableau" -->

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
        <th>region</th>

    </tr>
    <?php
        foreach ($chalets as $chalet) {
    ?>
        <tr>
        <td><?= $chalet->nom ?></td>
            <td><?= $chalet->description?></td>
            <td><?= $chalet->personnes_max ?></td>
            <td><?= $chalet->prix_haute_saison ?></td>
            <td><?= $chalet->prix_basse_saison ?></td>
            <td><?= $chalet->actif ?></td>
            <td><?= $chalet->promo ?></td>
            <td><?= $chalet->date_inscription ?></td>
            <td><?= $chalet->nom_region ?></td>
            <td>
                <a href="fiche_chalet.php?id=<?= $chalet->id ?>">Afficher</a>
            </td>
        </tr>
    <?php
        }
    ?>
</table>
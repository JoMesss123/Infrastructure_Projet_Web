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
        foreach ($activite as $activites) {
    ?>
        <tr>
            <td><?= $activites->nom_activite ?></td>
            <td><?= $activites->description_activite ?></td>
            <td><?= $activites->hiver_activite ?></td>
            <td><?= $activites->ete_activite ?></td>
            <td><?= $activites->nom_region ?></td>

            <td>
                <a href="fiche_activite.php?id=<?= $activites->id ?>">Afficher</a>
                | 
                
            </td>
        </tr>
    <?php
        }
    ?>
</table>
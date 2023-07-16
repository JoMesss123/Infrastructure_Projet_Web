<!-- Affichage en mode "tableau" -->

<table>
    <tr>
        <th>nom</th>        
        <th>prenom</th>        
        <th>date_avis</th>        
        <th>description</th>       
        <th>activite</th>

    </tr>

    <?php
        foreach ($avis as $avis) {
    ?>
        <tr>
            <td><?= $avis->nom ?></td>
            <td><?= $avis->prenom ?></td>
            <td><?= $avis->date_avis ?></td>
            <td><?= $avis->description ?></td>
            <td><?= $avis->nom_activite ?></td>

            <td>
                <a href="fiche_avis.php?id=<?= $avis->id ?>">Afficher</a>
                | 
                <a href="edition_avis.php?id=<?= $avis->id ?>">Modifier</a> 
                | 
                <a href="suppression_avis.php?id=<?= $avis->id ?>">Supprimer</a>
            </td>
        </tr>
    <?php
        }
    ?>
</table>
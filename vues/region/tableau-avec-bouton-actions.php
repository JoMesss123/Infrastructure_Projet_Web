
<table>
    <tr>
        <th>nom</th> 
        <th></th>       
        

    </tr>

    <?php
        foreach ($region as $region) {
    ?>
        <tr>
            <td><?= $region->nom ?></td>
            
            <td>
                <a href="fiche_region.php?id=<?= $region->id ?>">Afficher</a>
                | 
                <a href="edition_region.php?id=<?= $region->id ?>">Modifier</a> 
                | 
                <a href="suppression_region.php?id=<?= $region->id ?>">Supprimer</a>
            </td>
        </tr>
    <?php
        }
    ?>
</table>
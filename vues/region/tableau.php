<!-- Affichage en mode "tableau" -->

<table>

<tr>
        <th>nom</th>        
        
    </tr>
    <?php
        foreach ($region as $region) {
    ?>
        <tr>
        <td><?= $region->nom ?></td>
            
                <a href="fiche_region.php?id=<?= $region->id ?>">Afficher</a>
            </td>
        </tr>
    <?php
        }
    ?>
</table>
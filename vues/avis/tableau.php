<!-- Affichage en mode "tableau" -->
<h2>Affichage en mode "tableau"</h2>
<table>
    <tr>
        <th>nom</th>        
        <th>prenom</th>        
        <th>date de l'avis</th>        
        <th>description</th>       
        <th>l'activitée</th>

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
                
            </td>
        </tr>
    <?php
        }
    ?>
</table>
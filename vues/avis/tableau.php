<!-- Affichage en mode "tableau" -->
<h2>Affichage en mode "tableau"</h2>
<table>
    <tr>
        <th>nom</th>        
        <th>prenom</th>        
        <th>date de l'avis</th>        
        <th>description</th>       
        <th>l'activitée</th>
        <th></th>

    </tr>

    <?php
        foreach ($avis as $avis) {
    ?>
        <tr>
            <td><?= $avis->nom ?></td>
            <td><?= $avis->prenom ?></td>
            <td><?= $avis->date_avis ?></td>
            <td><?= $avis->description ?></td>
            <td><a href="fiche_activite.php?id=<?= $avis->id_activite ?>"><?= $avis->nom_activite ?></a></td>

            <td>
                <a href="fiche_avis.php?id=<?= $avis->id ?>">Afficher</a>
                | 
                
            </td>
        </tr>
    <?php
        }
    ?>
</table>
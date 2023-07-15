<div class="container">
    <h1>Éditer un chalet</h1>
    <form method="POST">
        <div>
            <div>
                <label for="nom">Nom *</label>
               
                <input type="text" id="nom" name="nom" required maxlength="25" value="<?= $chalet->nom ?>">
            </div>
            <div>
                <label for="description">Description *</label>

                <input type="text" id="description" name="description" required minlength="2"  value="<?= $chalet->description ?>">
            </div>
        </div>

        <div>
            <div>
                <label for="personne_max">Nombre de personne maximun*</label>
                
                <input type="number" step="1" id="personne_max" name="personne_max" required value="<?= $chalet->personne_max ?>">
            </div>
            <div>
                <label for="prix_haute_saison">Prix de la haute saison *</label>
                
                <input type="number" step=".01" id="prix_haute_saison" name="prix_haute_saison" required value="<?= $chalet->prix_haute_saison ?>">
            </div>
            <div>
                <label for="prix_basse_saison">Prix de la basse saison*</label>
                
                <input type="number" step=".01" id="prix_basse_saison" name="prix_basse_saison" required value="<?= $chalet->prix_basse_saison ?>">
            </div>
            <div>
                <label for="actif">Actif *</label>
                
                <input type="number" step="1" id="actif" name="actif" required value="<?= $chalet->actif ?>">
            </div>
            <div>
                <label for="promo">Promo *</label>
                
                <input type="number" step="1" id="promo" name="promo" required value="<?= $chalet->promo ?>">
            </div>
            <div>
                <label for="date_inscription">Date d'inscription *</label>
                
                <input type="date" id="date_inscription" name="date_inscription" required value="<?= $chalet->date_inscription ?>">
            </div>
            <div>
                <label for="fk_region">Région *</label>
                
                <input type="number" step="1" id="fk_region" name="fk_region" required value="<?= $chalet->fk_region ?>">
            </div>
        </div>

        <button name="boutonEditer" type="submit">Modifier le chalet</button><br>
    </form>                         
</div>
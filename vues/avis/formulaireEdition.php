<div class="container">
    <h1>Éditer un avis</h1>
    <form method="POST">
        <div>
            <div>
                <label for="nom">Nom *</label>
               
                <input type="text" id="nom" name="nom" required maxlength="25" value="<?= $avis->nom ?>">
            </div>
            <div>
                <label for="prenom">prenom *</label>

                <input type="text" id="description" name="prenom" required minlength="2"  value="<?= $avis->prenom ?>">
            </div>
        </div>

        <div>
            <div>
                <label for="date_avis">date de l'avis*</label>
                
                <input type="date"  id="date_avise" name="date_avis" required value="<?= $avis->date_avis ?>">
            </div>
            <div>
                <label for="description">Votre avis *</label>
                
                <input type="text"  id="description" name="description" required value="<?= $avis->description ?>">
            </div>
            
            <div>
                <label for="id_activite">Activite de l'avis *</label>
                
                <input type="number" step="1" id="id_activite" name="id_activite" required value="<?= $avis->id_activite ?>">
            </div>
        </div>

        <button name="boutonEditer" type="submit">Modifier l'avis</button><br>
    </form>                         
</div>
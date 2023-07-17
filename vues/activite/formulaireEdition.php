<div class="container">
    <h1>Éditer un activité</h1>
    <form method="POST">
        <div>
            <div>
                <label for="nom_activite">Nom *</label>
               
                <input type="text" id="nom_activite" name="nom_activite" required maxlength="25" value="<?= $activite->nom_activite ?>">
            </div>
            <div>
                <label for="description_activite">Description *</label>

                <input type="text" id="description_activite" name="description_activite" required minlength="2"  value="<?= $activite->description_activite ?>">
            </div>
        </div>

        <div>
            <div>
                <label for="hiver_activite">activité hivernale*</label>
                
                <input type="number" step="1" id="hiver_activite" name="hiver_activite" required value="<?= $activite->hiver_activite ?>">
            </div>
            <div>
                <label for="ete_activite">activité estival *</label>
                
                <input type="number" step="1" id="ete_activite" name="ete_activite" required value="<?= $activite->ete_activite ?>">
            </div>
            
            <div>
                <label for="fk_region">Région *</label>
                
                <?php
                $controlleurRegion=new ControlleurRegion;
                $controlleurRegion->afficherListeDeroulanteRegion();
            ?>
            </div>
        </div>

        <button name="boutonEditer" type="submit">Modifier l'activité</button><br>
    </form>                         
</div>
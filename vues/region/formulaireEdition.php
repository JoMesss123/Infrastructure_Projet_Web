<div class="container">
    <h1>Éditer un chalet</h1>
    <form method="POST">
        <div>
            <div>
                <label for="nom">Nom *</label>
               
                <input type="text" id="nom" name="nom" required maxlength="50" value="<?= $region->nom ?>">
            </div>
           
        </div>

        

        <button name="boutonEditer" type="submit">Modifier la région</button><br>
    </form>                         
</div>
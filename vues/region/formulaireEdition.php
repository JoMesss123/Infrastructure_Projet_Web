<div class="container">
    <h1>Éditer un chalet</h1>
    <form method="POST">
        <div>
            <div>
                <label for="nom">Nom *</label>
               
                <input type="text" id="nom" name="nom" required maxlength="25" value="<?= $chalet->nom ?>">
            </div>
           
        </div>

        

        <button name="boutonEditer" type="submit">Modifier le chalet</button><br>
    </form>                         
</div>
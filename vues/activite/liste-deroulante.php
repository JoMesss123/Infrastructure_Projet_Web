<select id="id_activite" name="id_activite">
    <?php
        foreach ($activite as $activite) {
    ?>
        <option value="<?= $activite->id ?>">
             <?= $activite->nom_activite ?> (<?= $activite->id ?>)
        </option>
    <?php
        }
    ?>
</select>
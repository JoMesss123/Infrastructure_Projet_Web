<select id="fk_region" name="fk_region">
    <?php
        foreach ($region as $region) {
    ?>
        <option value="<?= $region->id ?>">
             <?= $region->nom ?> (<?= $region->id ?>)
        </option>
    <?php
        }
    ?>
</select>
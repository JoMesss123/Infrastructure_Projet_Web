<?php
    require_once 'controlleurs/authentificationAdmin.php';

    if (isset($_POST['boutonAjoutAdministrateur'])) {        
        $controlleurAuthentificationAdmin=new ControlleurAuthentificationAdmin;
        $controlleurAuthentificationAdmin->ajouter();
    }
?>
<dialog id="dialog_ajout_admin"> 
    <h2>Ajout d'un administrateur</h2>

    <form method="POST">
        <label for="administrateur_ajout">Administrateur</label>
        <input type="text" id="administrateur_ajout" name="administrateur_ajout" maxlength="100" required>
        <br>
        <label for="mot_de_passe_ajout">Mot de passe</label>
        <input type="password" id="mot_de_passe_ajout" name="mot_de_passe_ajout" maxlength="255" required>

        <br>
        <label for="courriel_ajout">Courriel</label>
        <input type="email" id="courriel_ajout" name="courriel_ajout" maxlength="255" required>


        <div><button name="boutonAjoutAdministrateur" type="submit">Ajouter l'administrateur</button></div>

    </form>
</dialog>
<button onclick="document.getElementById('dialog_ajout_admin').showModal();">Inscription</button>

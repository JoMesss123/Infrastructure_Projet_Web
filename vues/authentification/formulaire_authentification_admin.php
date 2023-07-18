<?php
    require_once 'controlleurs/authentificationAdmin.php';

    if (isset($_POST['boutonConnexion'])) {        
        $controleurAuthentificationAdmin=new ControlleurAuthentificationAdmin;
        $controleurAuthentificationAdmin->connecter();
    } else if (isset($_POST['boutonDeconnexion'])) { 
        $controleurAuthentificationAdmin=new ControlleurAuthentificationAdmin;
        $controleurAuthentificationAdmin->deconnecter();
    }
?>

<?php if(!isset($_SESSION["administrateur"])) { ?>
    <dialog id="dialog_login_admin"> 
        <h2>Formulaire d'authentification</h2>
        <form method="POST">
            <label for="administrateur_login">Administrateur</label>
            <input type="text" id="administrateur_login" name="administrateur_login" required><br>

            <label for="mot_de_passe_login">Mot de passe</label>
            <input type="password" id="mot_de_passe_login" name="mot_de_passe_login" required><br>

            <button name="boutonConnexion" type="submit">Connexion</button>
        </form>
    </dialog>        
    <button onclick="document.getElementById('dialog_login_admin').showModal();">Administrateur</button>

<?php } else { ?>
    
    <form method="POST">
        
        <button name="boutonDeconnexion" type="submit">Déconnexion</button> 
        <div class="user"><?= $_SESSION["administrateur"] ?> </div>
        
    </form>
<?php } ?>



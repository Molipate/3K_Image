<div class="canvas">
    <?php if($_SESSION['connexion'] == "false"){ ?>
        <form action="" method="post">
            <fieldset>
                <legend>Connexion : </legend>
                <label for="id">Identifiant : </label>
                <input type="text" name="id" id="id" /><br/>
                <label for="pwd">Mot de passe : </label>
                <input type="password" name="pwd" id="pwd"/><br/>
                <input type="submit" value="Se connecter !"/>
            </fieldset>
        </form>
    <?php } else { echo "Vous êtes déjà connecté !"; } ?>
</div>
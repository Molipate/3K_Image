<div class="canvas">
        <form action="<?=BASE_URL?>index.php/main/valid_connexion" method="post">
            <fieldset>
                <legend>Connexion : </legend>
                <label for="id">Identifiant : </label>
                <input type="text" name="id" id="id" /><br/>
                <label for="pwd">Mot de passe : </label>
                <input type="password" name="pwd" id="pwd"/><br/>
                <input type="submit" value="Se connecter !"/>
                <small class="error"><?php if(!empty($error)){ echo $error; } ?></small>
            </fieldset>
        </form>
</div>
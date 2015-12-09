<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/foundation.css" />
        <script src="<?php echo BASE_URL; ?>assets/js/vendor/modernizr.js"></script>
    </head>
    <body>

        <br><br>
        <div class="row">
            <div class="panel">
                <form action="<?=BASE_URL?>index.php/main/validFormConnexion" method="post">
                    <fieldset>
                        <legend>Connexion : </legend>
                        <label for="id">Identifiant : </label>
                        <input type="text" name="id" id="id" value="<?php if(!empty($data['id'])) echo $data['id']; ?>" />
                        <?php if(!empty($error['id'])) echo '<small class="error">'.$error['id'].'</small>'; ?>
                        <label for="pwd">Mot de passe : </label>
                        <input type="password" name="pwd" id="pwd"/>
                        <?php if(!empty($error['pwd'])) echo '<small class="error">'.$error['pwd'].'</small>'; ?>
                        <button>Connexion</button>
                        <a class="button" href="<?=BASE_URL?>index.php">Retour</a>
                    </fieldset>
                </form>
            </div>
        </div>

    </body>
</html>




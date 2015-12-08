<form action="<?=BASE_URL?>index.php/gestion/validFormAjouterCategorie" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Ajouter une catégorie : </legend>

        <label for="titre">Nom : </label>
        <input type="text" name="titre" id="titre" value="<?php if(!empty($data['titre'])){ echo $data['titre']; } ?>">
        <?php if(!empty($errors['titre'])){ echo '<small class="error">'.$errors['titre']."</small>"; } ?>

        <label for="image">Image : </label>
        <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
        <input type="file" name="image" id="image">
        <?php if(!empty($errors['image'])){ echo '<small class="error">'.$errors['image']."</small>"; } ?>

        <button>Ajouter !</button>
    </fieldset>
</form>
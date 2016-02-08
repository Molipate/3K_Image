<h1 class="large-text-center">Modifier une catégorie</h1>
<div class="row">
    <div class="panel">
        <form action="<?=BASE_URL?>index.php/admin/validFormModifierCategorie/<?=$data['idCateogie']?>" method="post" enctype="multipart/form-data">

            <label for="titre">Nom : </label>
            <input type="text" name="titre" id="titre" value="<?= $data['nomCategorie'];?>">
            <?php if(!empty($errors['titre'])){ echo '<small class="error">'.$errors['titre']."</small>"; } ?>

            <label for="image">Image : </label>
            <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
            <input type="file" name="image" id="image">
            <?php if(!empty($errors['image'])){ echo '<small class="error">'.$errors['image']."</small>"; } ?>

            <button>Ajouter !</button>

        </form>
    </div>
</div>

<h1 class="large-text-center">Ajouter un membre</h1>
<div class="row">
    <div class="panel">
        <form action="<?=BASE_URL?>index.php/admin/validFormAjouterMembre" method="post" enctype="multipart/form-data">

            <label for="nom">Nom : </label>
            <input type="text" name="nom" id="nom" value="<?php if(!empty($data['nom'])){ echo $data['nom']; } ?>">
            <?php if(!empty($errors['nom'])){ echo '<small class="error">'.$errors['nom']."</small>"; } ?>

            <label for="prenom">Prenom : </label>
            <input type="text" name="prenom" id="prenom" value="<?php if(!empty($data['prenom'])){ echo $data['prenom']; } ?>">
            <?php if(!empty($errors['prenom'])){ echo '<small class="error">'.$errors['prenom']."</small>"; } ?>

            <label for="image">Photo : </label>
            <input type="hidden" name="MAX_FILE_SIZE" value="1073741824" />
            <input type="file" name="image" id="image">
            <?php if(!empty($errors['image'])){ echo '<small class="error">'.$errors['image']."</small>"; } ?>

            <label for="description">Description</label>
            <textarea rows="4" cols="50" name="description" id="description"></textarea>
            <button>Ajouter !</button>

        </form>
    </div>
</div>

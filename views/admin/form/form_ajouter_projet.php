<h1 class="large-text-center">Ajouter un projet</h1>
<?php
if($data != NULL){
    echo '<br/><br><br><br><small class="error large-text-center" style="font-size: 25px;">
        Pour ajouter une vidéo, vous devez en premier lieu ajouter une catégorie ...
</small>';
}
else { ?>
    <div class="row">
        <div class="panel">
            <form action="<?= BASE_URL ?>index.php/admin/ajouterProjet" method="post">
                <label for="titre">Titre du projet : </label>
                <input type="text" name="titre" id="titre">

                <label for="categorie">Catégorie</label>
                <select name="categorie" id="categorie">
                    <option value="-1">Catégorie ...</option>
                    <?php
                    foreach($data as $c){
                        echo '<option value="'.$c['idCategorie'].'">'.$c['nomCategorie'].'</option>';
                    }
                    ?>
                </select>

                <label for="description">Description</label>
                <textarea rows="4" cols="50" name="description" id="description"></textarea>
                <button>Ajouter !</button>
            </form>
        </div>
    </div>
<?php } ?>
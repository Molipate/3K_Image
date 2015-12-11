<?php
if($data == NULL){
    echo '<br/><br><br><br><small class="error large-text-center" style="font-size: 25px;">
        Pour ajouter une vidéo, vous devez en premier lieu ajouter une catégorie ...
</small>';
}
else { ?>
    <h1 class="large-text-center">Ajouter une vidéo</h1>
    <div class="row">
        <div class="panel">
            <form action="<?=BASE_URL?>index.php/admin/validFormAjouterVideo" method="post">
                    <label for="titre">Titre : </label>
                    <input type="text" name="titre" id="titre">

                    <label for="link">Lien : </label>
                    <input type="url" name="link" id="link">

                    <label for="date">Date de sortie (AAAA-MM-JJ) (will be improved) :</label>
                    <input type="text" name="date" id="date">

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
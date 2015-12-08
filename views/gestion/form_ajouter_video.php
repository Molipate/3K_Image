<?php
if($data == NULL){
    echo "Vous devez ajouter au moins une catégorie avant d'ajouter votre première vidéo";
}
else { ?>
<form action="<?=BASE_URL?>index.php/gestion/validFormAjouterVideo" method="post">
    <fieldset>
        <legend>Ajouter une vidéo</legend>

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
        <textarea rows="4" cols="50" name="description" id="description">
        </textarea>
        <button>Ajouter !</button>
    </fieldset>
</form>
<?php } ?>
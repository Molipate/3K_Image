<h1 class="large-text-center">Page de l'association</h1>
<div class="row">
    <div class="panel">
        <form action="<?=BASE_URL?>index.php/admin/modifierAssociation" method="post">
            <label for="text">Texte de la page : </label>
            <textarea rows="10" cols="2" name="text" id="text"><?=$text['text']?></textarea>
            <button>Ajouter !</button>
        </form>
    </div>
</div>

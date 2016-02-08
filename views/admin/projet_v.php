<h1 class="large-text-center">Page des projets</h1>
<div class="row">
    <div class="panel">
        <a href="<?=BASE_URL ?>index.php/projet/ajouterProjet">+ Ajouter un projet</a><br>
        <?php
        foreach($data as $p){
            echo '<img src="'.BASE_IMG.$p['linkImage'].'">';
            echo $p['titreProjet'].'<br>';
            echo $p['text'];
            echo '<a href="'.BASE_URL.'index.php/admin/modifierCategorie/'.$p['idProjet'].'">//
                <img src="'.BASE_IMG.'edit.png" alt="">//</a>';
            echo '<a href="'.BASE_URL.'index.php/projet/supprProjet/'.$p['idProjet'].'">
                <img src="'.BASE_IMG.'supp.png" alt=""></a><hr>';
        }
        ?>
        <hr>
    </div>
</div>
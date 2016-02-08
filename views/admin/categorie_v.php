
<style>
    img{
        width: 75px;
    }
</style>

<h1 class="large-text-center">Les catégories</h1>
<div class="row">
    <div class="panel">
        <a href="<?=BASE_URL ?>index.php/admin/ajouterCategorie">+ Ajouter une catégorie</a><br>
        <hr>
        <?php
        foreach($data as $c){
            echo '<img src="'.BASE_IMG.$c['linkImage'].'">';
            echo $c['nomCategorie'];
            echo '<a href="'.BASE_URL.'index.php/admin/modifierCategorie/'.$c['idCategorie'].'">
                <img src="'.BASE_IMG.'edit.png" alt=""></a>';
            echo '<a href="'.BASE_URL.'index.php/admin/supprCategorie/'.$c['idCategorie'].'">
                <img src="'.BASE_IMG.'supp.png" alt=""></a><hr>';
        }
        ?>
    </div>
</div>
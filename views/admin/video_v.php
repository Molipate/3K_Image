<style>
    img{
        width: 75px;
    }
</style>
<h1 class="large-text-center">Les vidéos</h1>
<div class="row">
    <div class="panel">
        <a href="<?=BASE_URL ?>index.php/admin/ajouterVideo">+ Ajouter une video</a><br>
        <hr>
            <?php if(!empty($video)) {
            foreach ($video as $v) {
                echo '<img src="'.BASE_IMG.$v['linkImage'].'" alt="fail to load image">';
                echo $v['titreVideo'];
            }
        } ?>
    </div>
</div>
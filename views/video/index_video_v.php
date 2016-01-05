<div class="canvas">
    <?php
    foreach($categorie as $c){
        echo '<a class="categorie" href="'.BASE_URL."index.php/video/categorie/".$c['idCategorie'].'"><img src="'.BASE_IMG.$c['link_image'].'"></a>';
    }
    ?>
</div>
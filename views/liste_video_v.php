<div class="canvas">
    <?php if(!empty($video)){
        foreach($video as $v){ ?>
            <div class="video_head">
                <img src="<?=BASE_IMG.$v['link_image']?>">
                <p style="font-weight: bold;"><?=$v['titreVideo']?></p><p> - <?=$v['dateSortie']?></p>
            </div><hr>
            <div class="video_body">
                <?=$this->makeVideo($v['linkVideo'])?>
                <p><?=$v['description']?></p>
            </div><br><br>
       <?php }
    } else {
        echo '<h4 style="text-align: center;">Aucune vidéo à afficher</h4>';
    }
    ?>
</div>
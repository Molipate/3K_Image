<div class="canvas">
    <div class="liste_video">
        <?php if(!empty($video)){
            foreach($video as $v){ ?>
                <a href="<?=BASE_URL?>index.php/video/video/<?=$v['idVideo']?>"><div class="video_head">
                    <img src="<?=BASE_IMG.$v['link_image']?>">
                    <p style="font-weight: bold;"><?=$v['titreVideo']?></p><p> - <?=$v['dateSortie']?></p>
                </div><hr>
                <div class="video_body">
                    <?=$this->makeVideo($v['linkVideo'], 512)?>
                    <p><?=$v['description']?></p>
                </div></a><br><br><br><br>
           <?php }
        } else {
            echo '<h4 style="text-align: center;">Aucune vidéo à afficher</h4>';
        }
        ?>
    </div>
</div>
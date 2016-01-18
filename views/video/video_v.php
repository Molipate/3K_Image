<div class="canvas">
    <br><br><br>
    <div class="video_video"><?=$this->makeVideo($v['linkVideo'], 896)?></div>
    <div class="info_video">
        <p class="date_video"><?=$v['dateSortie']?></p>
        <img class="img_video" src="<?= BASE_IMG . $v['link_image'] ?>" alt="">
        <p class="titre_video"><?=$v['titreVideo']?></p>
        <p class="desc_video"><?=$v['description']?></p>
    </div>
</div>
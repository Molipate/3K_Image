<div class="canvas">

    <div class="video_video"><?=$this->makeVideo($v['linkVideo'], 896)?></div>
    <div class="info_video">
        <img src="<?= BASE_IMG . $v['link_image'] ?>" alt="">
        <p class="titre_video"><?=$v['titreVideo']?></p>
        <p class="titre_video"><?=$v['dateSortie']?></p>
        <p class="titre_video"><?=$v['description']?></p>
    </div>
</div>
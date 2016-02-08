<script src="https://apis.google.com/js/platform.js"></script>
<div class="canvas">
    <br><br><br>
    <div class="video_video"><?=$this->makeVideo($v['linkVideo'], 896)?></div>
    <div class="info_video">
        <p class="date_video"><?=$v['dateVideo']?></p>
        <img class="img_video" src="<?= BASE_IMG . $v['linkImage'] ?>" alt="">
        <div class="subscribe">
            <p class="titre_video"><?=$v['titreVideo']?></p>
            <div class="button_s">
                <div class="g-ytsubscribe" data-channel="GoogleDevelopers" data-layout="full" data-count="default"></div>
            </div>
        </div>
        <p class="desc_video"><?=$v['text']?></p>
    </div>
</div>
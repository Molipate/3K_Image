<div class="canvas">

    <?php if(!empty($membre)){
        foreach($membre as $m){ ?>
            <div class="membre">
                <p class="membre_nom"><?=$m['nomMembre']." ".$m['prenomMembre']?></p>
                <img class="membre_photo" src="<?= BASE_IMG."membre/".$m['linkImage'] ?>" alt="">
                <p class="membre_description"><?=$m['text']?></p>
            </div>
            <br>
            <br>
            <hr>
        <?php }
    }
    ?>
</div>

<br><br><br>
<div class="row">
    <div class="panel">
        <a href="<?=BASE_URL ?>index.php/admin/ajouterMembre">+ Ajouter un membre</a><br>
        <hr>

        <?php if(!empty($membre)){

            foreach($membre as $m){ ?>
                <div class="membre">
                    <img class="membre_photo" src="<?= BASE_IMG."membre/".$m['linkImage'] ?>" alt="">
                    <p class="membre_nom">
                        <?=$m['nomMembre']." ".$m['prenomMembre']?>
                        <a style="font-size: 0.6em;" href="#">Modifier</a>
                        <a style="font-size: 0.6em;" href="#">Supprimer</a>
                    </p>
                    <p class="membre_description"><?=$m['text']?></p>
                </div>
                <hr>
            <?php }
        }
        ?>

    </div>
</div>
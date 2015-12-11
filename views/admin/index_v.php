<h1 class="large-text-center">Gestion Du Site</h1>

<?php
    if(empty($categorie)){
        echo '<small class="error large-text-center" style="font-size: 25px;">Rien à afficher</small>';
    }
    else{ ?>

    <style>
        table, thead, tr, th, tbody, tr, td{
            border: 1px solid black;
            border-collapse: collapse;
            height: 40px;
            text-align: center;
        }

        img{
            height: 40px;
        }
    </style>

    <div class="row">
        <div class="large-5 lare-centered columns">
            <table>
                <thead>
                    <tr>
                        <th>Catégorie</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($categorie as $c){
                        echo '<tr><td>'.$c['nomCategorie'].'</td>
                            <td><img src="'.BASE_URL."assets/img/".$c['link_image'].'"></td>
                            <td><a href="#"><img src="'.BASE_URL."assets/img/edit.png".'"></a></td>
                            <td><a href="#"><img src="'.BASE_URL."assets/img/supp.png".'"></a></td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="large-7 lare-centered columns">
            <?php if(!empty($video)){ ?>

                <table style="horiz-align: center;">
                    <thead>
                    <tr>
                        <th>Vidéo</th>
                        <th>Catégorie</th>
                        <th>Miniature</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($video as $v){
                        echo '<tr><td>'.$v['titreVideo'].'</td>
                            <td>'.$v['nomCategorie'].'</td>
                            <td>'.$v['linkVideo'].'</td>
                            <td><a href="#"><img src="'.BASE_URL."assets/img/view.png".'"></a></td>
                            <td><a href="#"><img src="'.BASE_URL."assets/img/edit.png".'"></a></td>
                            <td><a href="#"><img src="'.BASE_URL."assets/img/supp.png".'"></a></td></tr>';
                    }
                    ?>
                    </tbody>
                </table>

            <?php } ?>
        </div>
    </div>
<?php } ?>
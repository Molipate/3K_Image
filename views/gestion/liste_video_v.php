<?php
if(empty($video)){
    echo '<h1>Aucune vidéo en mémoire !</h1>';
} else {
    ?>

    <div class="row">
        <div class="panel">
            <h1>Liste des vidéos</h1>
            <table>
                <thead>
                <tr>
                    <th>titre</th>
                    <th>Miniature</th>
                    <th>Catégorie</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($video as $v){
                    echo '<tr><td>'.$v['titreVideo'].'</td>
                    <td>'.$v['link'].'</td>
                    <td>'.$v['categorie'].'</td>
                    <td><a href="#">Modifier</a></td>
                    <td><a href="#">Supprimer</a></td></tr>';
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
<?php } ?>


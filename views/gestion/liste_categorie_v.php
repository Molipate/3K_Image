<?php
if(empty($categorie)){
    echo '<h1>Aucune catégorie en mémoire !</h1>';
} else {
?>

<div class="row">
    <div class="panel">
        <h1>Liste des catégries</h1>
        <table>
            <thead>
            <tr>
                <th>Catégorie</th>
                <th>Image</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($categorie as $c){
                echo '<tr><td>'.$c['nomCategorie'].'</td>
                    <td><img src="'.BASE_IMG.$c['link_image'].'"></td>
                    <td><a href="#">Modifier</a></td>
                    <td><a href="#">Supprimer</a></td></tr>';
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
<?php } ?>


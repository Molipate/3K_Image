<nav>
    <div class="logo_nav">
        <a href="<?=BASE_URL?>index.php"><img src="<?=BASE_URL?>assets/img/logo.png" alt="logo"/></a>
    </div>
    <div class="zone_onglets">
        <table>
            <tr>
                <td class="onglet" ><a href="<?=BASE_URL?>index.php/video/liste"><p>Nos vidéos</p></a></td>
                <td class="onglet"><a href="<?=BASE_URL?>index.php/main/association">L'association</a></td>
                <td class="onglet"><a href="<?=BASE_URL?>index.php/main/membre">Les membres</a></td>
                <td class="onglet"><a href="<?=BASE_URL?>index.php/main/contact">Nous contacter</a></td>
                <td class="onglet"><a href="<?=BASE_URL?>index.php/main/rejoindre">Nous rejoindre</a></td>
                <?php if($_SESSION['connexion'] != "true"){
                    echo '<td class="onglet"><a href="'.BASE_URL."index.php/main/connexion".'">Connexion</a></td>';
                } else if($_SESSION['connexion'] == "true"){ ?>
                    <td class="onglet"><a href="<?=BASE_URL?>index.php/video/gestion">Gestion du site</a></td>
                    <td class="onglet"><a href="<?=BASE_URL?>index.php/main/deconnexion">Déconnexion</a></td>
                <?php }?>
            </tr>
        </table>
    </div>
    <!-- <a href="test.php">TEST</a> !-->
</nav>
<nav>
    <div class="logo_nav">
        <a href="<?=BASE_URL?>index.php/main/index"><img src="<?=BASE_URL?>assets/img/logo.png" alt="logo"/></a>
    </div>
    <div class="zone_onglets">
        <table>
            <tr>
                <td class="onglet" ><a href="<?=BASE_URL?>index.php/video/listeCategorie"><p>Nos vidéos</p></a></td>
                <td class="onglet"><a href="<?=BASE_URL?>index.php/main/association">L'association</a></td>
                <td class="onglet"><a href="<?=BASE_URL?>index.php/main/membre">Les membres</a></td>
                <td class="onglet"><a href="<?=BASE_URL?>index.php/main/contact">Nous contacter</a></td>
                <td class="onglet"><a href="<?=BASE_URL?>index.php/main/rejoindre">Nous rejoindre</a></td>
                <td class="onglet"><a href="<?=BASE_URL?>index.php/main/projet">Nos projets</a></td>
            </tr>
        </table>
    </div>

    <div class="admin">
        <table>
            <tr>
                <?php if($_SESSION['connexion'] == "true") { ?>
                    <td class="onglet_admin"><a href="<?= BASE_URL ?>index.php/admin/index">Gestion du site</a></td>
                    <td class="onglet_admin"><a href="<?= BASE_URL ?>index.php/main/deconnexion">Déconnexion</a></td>
                <?php } else { ?>
                    <td class="onglet_admin"><a href="<?= BASE_URL ?>index.php/main/connexion">Administration</a></td>
                <?php } ?>
            </tr>
        </table>
    </div>
</nav>
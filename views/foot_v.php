    <div class="admin">
        <table>
            <tr>
                <?php if($_SESSION['connexion'] == "true") { ?>
                    <td class="onglet"><a href="<?= BASE_URL ?>index.php/admin/index">Gestion du site</a></td>
                    <td class="onglet"><a href="<?= BASE_URL ?>index.php/admin/index">Déconnexion</a></td>
                <?php } else { ?>
                    <td class="onglet"><a href="<?= BASE_URL ?>index.php/admin/index">Administration</a></td>
                <?php } ?>
            </tr>
        </table>

    </div>
    </body>
</html>
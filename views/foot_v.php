    <div class="admin">
        <div class="admin_onglet">
            <?php
            if($_SESSION['connexion'] == "true") {
                echo '<li><a href="' . BASE_URL . "index.php/admin/index" . '">Deconnexion</a></li>';
                echo '<li><a href="' . BASE_URL . "index.php/admin/index" . '">Gestion du site</a></li>';
            }
            else
                echo '<a href="'.BASE_URL."index.php/admin/index".'>Administration</a>';
            ?>
        </div>
    </div>
    </body>
</html>
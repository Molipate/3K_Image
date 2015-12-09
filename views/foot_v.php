    <div class="admin">
        <?php
        if($_SESSION['connexion'] == "true")
            echo '<a href="'.BASE_URL."index.php/admin/index".'>Deconnexion</a>';
            echo '<a href="'.BASE_URL."index.php/admin/index".'>Gestion du site</a>';
        else
            echo '<a href="'.BASE_URL."index.php/admin/index".'>Administration</a>';
        ?>

    </div>
    </body>
</html>
<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
        <li class="name">
            <h1> <a href="<?=BASE_URL?>index.php/admin">Gestion du site</a></h1>
        </li>
        <li class="toggle-topbar menu-icon">
            <a href="#"><span>Menu</span></a>
        </li>
    </ul>

    <section class="top-bar-section">
        <ul class="left">
            <li class="divider"></li>
            <li><a href="<?=BASE_URL?>index.php/admin/video">Les vidéos</a></li>
            <li><a href="<?=BASE_URL?>index.php/admin/categorie">Les catégories</a></li>
            <li><a href="<?=BASE_URL?>index.php/admin/membre">Les membres</a></li>
            <li><a href="<?=BASE_URL?>index.php/admin/association">L'association</a></li>
            <li><a href="<?=BASE_URL?>index.php/admin/projet">Les projets</a></li>
        </ul>
        <ul class="right">
            <li class="active"><a href="<?php echo BASE_URL; ?>index.php/video/index">Retourner au site</a></li>
        </ul>
    </section>
</nav>
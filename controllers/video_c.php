<?php

class Video{

    private $instanceOfVideo;

    public function __construct(){
    }

    public function liste(){
        include("views/head_v.php");
        include("views/nav_v.php");
        include("views/index_v.php");
        include("views/foot_v.php");
    }
}


?>
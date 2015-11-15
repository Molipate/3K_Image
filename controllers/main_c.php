<?php

class Main{

    public function __construct(){

    }

    public function index(){

        include("views/head_v.php");
        include("views/nav_v.php");
        include("views/index_v.php");
        include("views/foot_v.php");
    }

    public function connexion(){

        include("views/head_v.php");
        include("views/nav_v.php");
        include("views/connexion_form_v.php");
        include("views/foot_v.php");
    }
}
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

    //TODO: check in database for login and password
    public function valid_connexion(){

        $data['id'] = htmlentities($_POST['id']);
        $data['pwd'] = htmlentities($_POST['pwd']);

        if($data['id'] == "root" && $data['pwd'] == "root"){
            $_SESSION['connexion'] = "true";
            header("location: ".BASE_URL."index.php/main/index");
        }
        else{

            $error = "Identifiants incorrectes !";
            include("views/head_v.php");
            include("views/nav_v.php");
            include("views/connexion_form_v.php");
            include("views/foot_v.php");
        }
    }

    public function deconnexion(){
        $_SESSION['connexion'] = "false";
        header("location: ".BASE_URL."index.php/main/index");
    }
}

?>
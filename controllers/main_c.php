<?php

class Main{

    private $instanceOfMembre;

    public function __construct(){

        require_once("models/membre_m.php");
        $this->instanceOfMembre = new Membre_m();
    }

    public function index(){
        #include("views/head_v.php");
        #include("views/nav_v.php");
        include("views/index_v.php");
    }
    //DONE
    public function connexion(){
        include("views/form_connexion_v.php");
    }
    //TODO: check in database for login and password
    public function validFormConnexion(){

        $data['id'] = htmlentities($_POST['id']);
        $data['pwd'] = htmlentities($_POST['pwd']);

        $error = array();
        if($data['id'] != "root")
            $error['id'] = "Mauvais identifiant !";
        if($data['pwd'] != "root")
            $error['pwd'] = "Mauvais mot de passe !";

        if(empty($error)){
            $_SESSION['connexion'] = "true";
            header("location: ".BASE_URL."index.php/admin/index");
        }
        else{
            include("views/form_connexion_v.php");
        }
    }
    //DONE
    public function deconnexion(){
        $_SESSION['connexion'] = "false";
        header("location: ".BASE_URL."index.php");
    }

    //TODO : All method for the asso / meet us / etc ...
    public function association(){
        include("views/head_v.php");
        include("views/nav_v.php");
        include("views/association_v.php");
        include("views/foot_v.php");
    }

    public function sendMail(){

    }

    public function contact(){
        include("views/head_v.php");
        include("views/nav_v.php");
        include("views/contact_v.php");
        include("views/foot_v.php");
    }

    public function membre(){

        $membre = $this->instanceOfMembre->getAll();

        include("views/head_v.php");
        include("views/nav_v.php");
        include("views/membre_v.php");
        include("views/foot_v.php");
    }

    public function rejoindre(){
        include("views/head_v.php");
        include("views/nav_v.php");
        include("views/rejoindre_v.php");
        include("views/foot_v.php");
    }

    public function projet(){
        include("views/head_v.php");
        include("views/nav_v.php");
        include("views/foot_v.php");
    }
}

?>
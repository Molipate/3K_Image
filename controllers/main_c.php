<?php

class Main{

    private $instanceOfMembre;
    private $instanceOfAsso;

    public function __construct(){

        require_once("models/membre_m.php");
        require_once("models/asso_m.php");
        $this->instanceOfMembre = new Membre_m();
        $this->instanceOfAsso = new Asso_m();
    }
    //DONE
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
            header("location: ".BASE_URL."index.php/admin/video");
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
    //DONE
    public function association(){

        $data= $this->instanceOfAsso->get();
        include("views/head_v.php");
        include("views/nav_v.php");
        include("views/association_v.php");
        include("views/foot_v.php");
    }

    public function sendMail(){

        if(empty($_POST['name']))
            $error['name'] = "Veuillez saisir un nom";
        if(empty($_POST['email']))
            $error['email'] = "Veuillez saisir un email";
        if(empty($_POST['msg']))
            $error['msg'] = "Veuillez saisir un message";

        if(empty($error)){
            $data['name'] = htmlentities($_POST['name']);
            $data['email'] = htmlentities($_POST['email']);
            $data['msg'] = htmlentities($_POST['msg']);

            $to = 'antoine.febvre1@gmail.com';
            $subject = $data['name'];
            $message = $data['msg'];
            $headers = 'From: '.$data['email'].'\r\n'.'Reply-To: '.$data['email'].'\r\n';

            if(mail($to, $subject, $message, $headers) == false)
                echo "fuck";
        }
        else{
            print_r($error);
        }
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
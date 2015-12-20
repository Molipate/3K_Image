<?php

class Admin{

    private $instanceOfVideo;
    private $instanceOfCategorie;

    //DONE
    public function __construct(){
        require_once("models/video_m.php");
        require_once("models/categorie_m.php");
        $this->instanceOfVideo = new Video_m();
        $this->instanceOfCategorie = new Categorie_m();
    }
    //DONE
    public function checkDroit(){
        if($_SESSION['connexion'] != "true")
            header("location: ".BASE_URL."index.php");
    }
    //DONE
    public function index(){
        $this->checkDroit();

        $video = $this->instanceOfVideo->getAllVideo();
        $categorie = $this->instanceOfCategorie->getAllCategorie();

        include("views/admin/head_v.php");
        include("views/admin/nav_v.php");
        include("views/admin/index_v.php");
        include("views/admin/foot_v.php");
    }

    public function makeVideo($link){
        if(substr($link, 12, 7) == "youtube"){
            $id = substr($link, 32);
            return '<iframe width="420" height="315" src="https://www.youtube.com/embed/'.$id.'
                        " frameborder="0" allowfullscreen></iframe>';
        }
    }
    //DONE
    public function ajouterCategorie(){
        $this->checkDroit();
        include("views/admin/head_v.php");
        include("views/admin/nav_v.php");
        include("views/admin/form/form_ajouter_categorie.php");
        include("views/admin/foot_v.php");
    }
    //WORKS
    public function validFormAjouterCategorie(){
        $this->checkDroit();
        $errors = array();
        $data = array();

        if(empty($_POST['titre'])){
            $errors['titre'] = "Veuillez saisir un titre";
        }

        if(empty($_FILES['image']['name']))
            $errors['image'] = "Veuillez choisir une image";
        /*else{
            $file_extension = strtolower(substr(strrchr($_FILES['icone']['name'], '.'), 1));
            $extension_allowed = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
        }*/

        $data['titre'] = htmlentities($_POST['titre']);
        $data['image'] = htmlentities($_FILES['image']['name']);

        if(!empty($errors)){
            include("views/admin/head_v.php");
            include("views/admin/nav_v.php");
            include("views/admin/form/form_ajouter_categorie.php");
            include("views/admin/foot_v.php");
        }
        else{
            $target = "assets/img/".$data['image'];
            if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $this->instanceOfCategorie->insert($data);
                header("location: " . BASE_URL . "index.php/admin/index");
            }
            else{
                echo "Failed to move file";
            }
        }
    }
    //DONE
    public function ajouterVideo(){

        $this->checkDroit();
        include("views/admin/head_v.php");
        include("views/admin/nav_v.php");
        $data = $this->instanceOfCategorie->getAllCategorie();
        include("views/admin/form/form_ajouter_video.php");
        include("views/admin/foot_v.php");
    }
    //WORKS
    public function validFormAjouterVideo(){

        $data['titre'] = htmlentities($_POST['titre']);
        $data['link'] = htmlentities($_POST['link']);
        $data['date'] = htmlentities($_POST['date']);
        $data['categorie'] = htmlentities($_POST['categorie']);
        $data['description'] = htmlentities($_POST['description']);
        $this->instanceOfVideo->insert($data);
        header("location: ".BASE_URL."index.php/admin/index");
    }
    //DONE
    public function modifierCategorie($id){
        $this->checkDroit();

        $data = $this->instanceOfCategorie->getCategorie($id);

        include("views/admin/head_v.php");
        include("views/admin/nav_v.php");
        include("views/admin/form/form_modifier_categorie.php");
        include("views/admin/foot_v.php");
    }

    public function validFormModifierCategorie(){

    }

    public function modifierVideo(){

    }

    public function validFormModifierVideo(){

    }

    public function supprCategorie(){

    }
    //DONE
    public function supprVideo($id){
        $this->instanceOfVideo->delete($id);
        header("location: ".BASE_URL."index.php/admin/index");
    }
}


?>
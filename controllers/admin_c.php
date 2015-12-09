<?php

class Admin{

    private $instanceOfVideo;
    private $instanceOfCategorie;

    //DONEs
    public function __construct(){
        require_once("models/video_m.php");
        require_once("models/categorie_m.php");
        $this->instanceOfVideo = new Video_m();
        $this->instanceOfCategorie = new Categorie_m();
    }
    //DONE
    public function checkDroit(){
        if($_SESSION['connexion'] != "true"){
            header("location: ".BASE_URL."index.php");
        }
    }
    //TODO : check connexion
    public function connexion(){

        include("views/gestion/head_v.php");
        include("views/gestion/nav_v.php");
        include("views/gestion/index_v.php");
        include("views/gestion/foot_v.php");
    }
    //DONE
    public function listeCategorie(){
        $this->checkDroit();
        include("views/gestion/head_v.php");
        include("views/gestion/nav_v.php");
        $categorie = $this->instanceOfCategorie->getAllCategorie();
        include("views/gestion/liste_categorie_v.php");
        include("views/gestion/foot_v.php");
    }
    //DONE
    public function ajouterCategorie(){

        $this->checkDroit();
        include("views/gestion/head_v.php");
        include("views/gestion/nav_v.php");
        include("views/gestion/form_ajouter_categorie.php");
        include("views/gestion/foot_v.php");
    }
    //TODO can maybe be improve a bit
    public function validFormAjouterCategorie(){
        $this->checkDroit();
        $errors = array();
        $data = array();

        print_r($_FILES);

        if(empty($_POST['titre'])){
            $errors['titre'] = "Veuillez saisir un titre";
        }
        $file_extension = strtolower(substr(strrchr($_FILES['icone']['name'], '.'), 1));
        $extension_allowed = array( 'jpg' , 'jpeg' , 'gif' , 'png' );

        if($_FILES['image']['error'] != 0 && in_array($file_extension, $extension_allowed)){
            $errors['image'] = "Veuillez selectionner une image valide !";
        }

        $data['titre'] = htmlentities($_POST['titre']);
        $data['image'] = htmlentities($_FILES['image']['name']);

        if(!empty($errors)){
            include("views/gestion/head_v.php");
            include("views/gestion/nav_v.php");
            include("views/gestion/form_ajouter_categorie.php");
            include("views/gestion/foot_v.php");
        }
        else{
            $target = "assets/img/".$data['image'];
            if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $this->instanceOfCategorie->insert($data);
                header("location: " . BASE_URL . "index.php/gestion/listeCategorie");
            }
            else{
                echo "Failed to move file";
            }
        }
    }

    public function listeVideo(){
        $this->checkDroit();
        include("views/gestion/head_v.php");
        include("views/gestion/nav_v.php");
        $video = $this->instanceOfVideo->getAllVideo();
        include("views/gestion/liste_video_v.php");
        include("views/gestion/foot_v.php");
    }
    //DONE
    public function ajouterVideo(){

        $this->checkDroit();
        include("views/gestion/head_v.php");
        include("views/gestion/nav_v.php");
        $data = $this->instanceOfCategorie->getAllCategorie();
        include("views/gestion/form_ajouter_video.php");
        include("views/gestion/foot_v.php");
    }
    //TODO MUST be improve
    public function validFormAjouterVideo(){

        $data['titre'] = htmlentities($_POST['titre']);
        $data['link'] = htmlentities($_POST['link']);
        $data['date'] = htmlentities($_POST['date']);
        $data['categorie'] = htmlentities($_POST['categorie']);
        $data['description'] = htmlentities($_POST['description']);
        $this->instanceOfVideo->insert($data);
        header("location: ".BASE_URL."index.php/gestion/listeVideo");
    }
}


?>
<?php

class Admin{

    private $instanceOfVideo;
    private $instanceOfCategorie;
    private $instanceOfMembre;

    //DONE
    public function __construct(){
        require_once("models/video_m.php");
        require_once("models/categorie_m.php");
        require_once("models/membre_m.php");
        $this->instanceOfVideo = new Video_m();
        $this->instanceOfCategorie = new Categorie_m();
        $this->instanceOfMembre = new Membre_m();
    }
    //DONE
    public function checkDroit(){
        if($_SESSION['connexion'] != "true")
            header("location: ".BASE_URL."index_video_v.php");
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

    public function makeVideo($link, $w){
        if(substr($link, 12, 7) == "youtube"){
            $id = substr($link, 32);
            return '<iframe width="'.$w.'" height="'.$w * (9 / 16).'" src="https://www.youtube.com/embed/'.$id.'
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

    public function supprCategorie($id){
        $this->instanceOfCategorie->delete($id);
        header("location: ".BASE_URL."index.php/admin/index");
    }
    //DONE
    public function supprVideo($id){
        $this->instanceOfVideo->delete($id);
        header("location: ".BASE_URL."index.php/admin/index");
    }
    //DONE
    public function membre(){
        $this->checkDroit();

        $membre = $this->instanceOfMembre->getAll();

        include("views/admin/head_v.php");
        include("views/admin/nav_v.php");
        include("views/admin/membre/membre_v.php");
        include("views/admin/foot_v.php");
    }
    //WORKS
    public function validFormAjouterMembre(){

        $this->checkDroit();
        $errors = array();
        $data = array();

        if(empty($_POST['nom'])){
            $errors['nom'] = "Veuillez saisir le nom de la personne";
        }

        if(empty($_POST['prenom'])){
            $errors['prenom'] = "Veuillez saisir le prenom de la personne";
        }

        if(empty($_FILES['image']['name']))
            $errors['image'] = "Veuillez choisir une image";
        /*else{
            $file_extension = strtolower(substr(strrchr($_FILES['icone']['name'], '.'), 1));
            $extension_allowed = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
        }*/

        $data['nom'] = htmlentities($_POST['nom']);
        $data['prenom'] = htmlentities($_POST['prenom']);
        $data['image'] = htmlentities($_FILES['image']['name']);
        $data['description'] = htmlentities($_POST['description']);

        if(!empty($errors)){
            include("views/admin/head_v.php");
            include("views/admin/nav_v.php");
            include("views/admin/form/form_ajouter_membre.php");
            include("views/admin/foot_v.php");
        }
        else{
            $target = "assets/img/membre/".$data['image'];
            if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                echo "lol";
                $this->instanceOfMembre->insert($data);
                header("location: " . BASE_URL . "index.php/admin/membre");
            }
            else{
                echo "Failed to move file";
            }
        }
    }

    public function ajouterMembre(){
        include("views/admin/head_v.php");
        include("views/admin/nav_v.php");
        include("views/admin/form/form_ajouter_membre.php");
        include("views/admin/foot_v.php");
    }

    public function modifierMembre($id){

    }

    public function supprMembre($id){}
}


?>
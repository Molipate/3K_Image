<?php

class Projet{

    private $instanceOfProjet;
    private $instanceOfCategorie;

    //DONE
    public function __construct(){
        require_once("models/projet_m.php");
        require_once("models/categorie_m.php");
        $this->instanceOfProjet = new Projet_m();
        $this->instanceOfCategorie = new Categorie_m();
    }

    public function ajouterProjet(){

        $data = $this->instanceOfCategorie->getAllCategorie();

        include("views/admin/head_v.php");
        include("views/admin/nav_v.php");
        include("views/admin/form/form_ajouter_projet.php");
        include("views/admin/foot_v.php");
    }

    public function validFormAjouterProjet(){

        print_r($_POST);
        $this->instanceOfProjet->insert($_POST);
        header("location: ".BASE_URL."index.php/admin/projet");
    }

    public function modifierProjet($id){

    }

    public function supprProjet($id){
        $this->instanceOfProjet->delete($id);
        header("location: ".BASE_URL."index.php/admin/projet");
    }
}

?>
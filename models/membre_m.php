<?php

class Membre_m{

    private $base;

    public function __construct(){

        $co = new Connexion();
        $this->base = $co->connect();
    }

    public function getAll(){
        $cmd = $this->base->prepare("SELECT nomMembre, prenomMembre, link_photo, descriptionMembre FROM membre");
        $cmd->execute();
        return $cmd->fetchAll();
    }

    public function insert($data){
        $cmd = $this->base->prepare("INSERT INTO membre (nomMembre, prenomMembre,
                  link_photo, descriptionMembre) VALUES (?, ?, ?, ?)");
        $cmd->bindValue(1, $data['nom']);
        $cmd->bindValue(2, $data['prenom']);
        $cmd->bindValue(3, $data['image']);
        $cmd->bindValue(4, $data['description']);
        $cmd->execute();
    }

    public function delete($id){
        $cmd = $this->base->prepare("DELETE FROM categorie WHERE idCategorie = ?");
        $cmd->bindValue(1, $id);
        $cmd->execute();
    }
}

?>
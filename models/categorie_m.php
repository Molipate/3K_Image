<?php

class Categorie_m{

    private $base;

    public function __construct(){

        $co = new Connexion();
        $this->base = $co->connect();
    }

    public function getAllCategorie(){
        $cmd = $this->base->prepare("SELECT idCategorie, nomCategorie, link_image FROM categorie");
        $cmd->execute();
        return $cmd->fetchAll();
    }

    public function getCategorie($id){
        $cmd = $this->base->prepare("SELECT idCategorie, nomCategorie, link_image
          FROM categorie WHERE idCategorie=?");
        $cmd->bindValue(1, $id);
        $cmd->execute();
        return $cmd->fetch();
    }

    public function insert($data){
        $cmd = $this->base->prepare("INSERT INTO categorie (nomCategorie, link_image) VALUES (?, ?)");
        $cmd->bindValue(1, $data['titre']);
        $cmd->bindValue(2, $data['image']);
        $cmd->execute();
    }

    public function delete($id){
        $cmd = $this->base->prepare("DELETE FROM categorie WHERE idCategorie = ?");
        $cmd->bindValue(1, $id);
        $cmd->execute();
    }
}

?>
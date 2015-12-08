<?php

class Video_m{

    private $base;

    public function __construct(){

        $co = new Connexion();
        $this->base = $co->connect();
    }

    public function getAllVideo(){
        $cmd = $this->base->prepare("SELECT v.titreVideo, v.linkVideo, v.description,
          v.dateSortie, v.categorieVideo FROM video v, categorie c WHERE v.categorieVideo = c.idCategorie");
        $cmd->execute();
        return $cmd->fetchAll();
    }

    public function insert($data){
        $cmd = $this->base->prepare("INSERT INTO video (titreVideo, linkVideo, description, dateSortie, categorieVideo)
          VALUES (?, ?, ?, ?, ?)");
        $cmd->bindValue(1, $data['titre']);
        $cmd->bindValue(2, $data['link']);
        $cmd->bindValue(3, $data['description']);
        $cmd->bindValue(4, $data['date']);
        $cmd->bindValue(5, $data['categorie']);
        $cmd->execute();
    }

}

?>
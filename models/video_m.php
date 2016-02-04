<?php

class Video_m{

    private $base;
    //DONE
    public function __construct(){

        $co = new Connexion();
        $this->base = $co->connect();
    }
    //DONE
    public function getAllVideo(){
        $cmd = $this->base->prepare("
          SELECT v.idVideo, v.titreVideo, v.linkVideo, v.dateVideo,
            c.idCategorie, c.nomCategorie,
            i.idImage, i.linkImage,
            t.idText, t.text
          FROM video v, categorie c, image i, text t
          WHERE v.categorieVideo = c.idCategorie
          AND c.imageCategorie = i.idImage
          AND v.descriptionVideo = t.idText");
        $cmd->execute();
        return $cmd->fetchAll();
    }
    //DONE
    public function getAllFromCategorie($id){
        $cmd = $this->base->prepare("
          SELECT v.idVideo, v.titreVideo, v.linkVideo, v.dateVideo,
            c.idCategorie, c.nomCategorie,
            i.idImage, i.linkImage,
            t.idText, t.text
          FROM video v, categorie c, image i, text t
          WHERE v.categorieVideo = c.idCategorie
          AND c.imageCategorie = i.idImage
          AND v.descriptionVideo = t.idText
          AND c.idCategorie = ?");
        $cmd->bindValue(1, $id);
        $cmd->execute();
        return $cmd->fetchAll();
    }

    public function getVideo($id){
        $cmd = $this->base->prepare("SELECT v.titreVideo, v.linkVideo, v.description,
          v.dateSortie, c.nomCategorie, c.link_image
          FROM video v, categorie c WHERE v.categorieVideo = c.idCategorie AND v.idVideo = ?");
        $cmd->bindValue(1, $id);
        $cmd->execute();
        return $cmd->fetch();
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

    public function update($data){

    }
    //Check for foreign key
    public function delete($id){
        $cmd = $this->base->prepare("DELETE FROM video WHERE idVideo =?");
        $cmd->bindValue(1, $id);
        $cmd->execute();
    }

}

?>
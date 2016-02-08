<?php

class Categorie_m{

    private $base;

    public function __construct(){

        $co = new Connexion();
        $this->base = $co->connect();
    }
    //DONE
    public function getAllCategorie(){
        $cmd = $this->base->prepare("
          SELECT c.idCategorie, c.nomCategorie, i.linkImage
          FROM categorie c, image i
          WHERE c.imageCategorie = i.idImage");
        $cmd->execute();
        return $cmd->fetchAll();
    }
    //DONE
    public function getCategorie($id){
        $cmd = $this->base->prepare("
          SELECT c.idCategorie, c.nomCategorie, i.linkImage
          FROM categorie c, image i
          WHERE c.imageCategorie = i.idImage
          AND c.idCategorie = ?");
        $cmd->bindValue(1, $id);
        $cmd->execute();
        return $cmd->fetch();
    }
    //DONE
    public function insert($data){

        $cmd = $this->base->prepare("INSERT INTO image (linkImage) VALUES (?)");
        $cmd->bindValue(1, $data['image']);
        $cmd->execute();

        $idImage = $this->base->lastInsertId();

        $cmd = $this->base->prepare("INSERT INTO categorie (nomCategorie, imageCategorie) VALUES (?, ?)");
        $cmd->bindValue(1, $data['titre']);
        $cmd->bindValue(2, $idImage);
        $cmd->execute();
    }

    public function update($id, $data){

        $cmd = $this->base->prepare("UPDATE categorie SET nomCategorie = ? WHERE idCategorie = ?");
        $cmd->bindValue(1, $data['titre']);
        $cmd->bindValue(2, $id);
        $cmd->execute();

        $cmd = $this->base->prepare("
          SELECT i.idImage
          FROM image i, categorie c
          WHERE c.imageCategorie = i.idImage
          AND c.idCategorie = ?");
        $cmd->bindValue(1, $id);
        $cmd->execute();
        $idImage = $cmd->fetch();
        echo $idImage;

        $cmd = $this->base->prepare("UPDATE image SET linkImage = ? WHERE idImage = ?");
        $cmd->bindValue(1, $data['image']);
        $cmd->bindValue(1, $idImage);
        echo $cmd->queryString;
        $cmd->execute();

    }
    //Check for foreign k
    public function delete($id){
        $cmd = $this->base->prepare("DELETE FROM categorie WHERE idCategorie = ?");
        $cmd->bindValue(1, $id);
        $cmd->execute();
    }
}

?>
<?php

class Membre_m{

    private $base;
    //DONE
    public function __construct(){

        $co = new Connexion();
        $this->base = $co->connect();
    }
    //DONE
    public function getAll(){
        $cmd = $this->base->prepare("
          SELECT m.idMembre, m.nomMembre, m.prenomMembre, i.linkImage, t.text
          FROM membre m, image i, text t
          WHERE m.photoMembre = i.idImage
          AND m.descriptionMembre = t.idText");
        $cmd->execute();
        return $cmd->fetchAll();
    }
    //DONE
    public function getMembre($id){
        $cmd = $this->base->prepare("
          SELECT m.idMembre, m.nomMembre, m.prenomMembre, i.linkImage, t.text
          FROM membre m, image i, text t
          WHERE m.photoMembre = i.idImage
          AND m.descriptionMembre = t.idText
          AND m.idMembre = ?");
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

        $cmd = $this->base->prepare("INSERT INTO text (text) VALUES (?)");
        $cmd->bindValue(1, $data['description']);
        $cmd->execute();
        $idText = $this->base->lastInsertId();

        $cmd = $this->base->prepare("INSERT INTO membre (nomMembre, prenomMembre,
                  photoMembre, descriptionMembre) VALUES (?, ?, ?, ?)");
        $cmd->bindValue(1, $data['nom']);
        $cmd->bindValue(2, $data['prenom']);
        $cmd->bindValue(3, $idImage);
        $cmd->bindValue(4, $idText);
        $cmd->execute();
    }

    public function update($date){

    }
    //DONE
    public function delete($id){
        $cmd = $this->base->prepare("DELETE FROM membre WHERE idMembre = ?");
        $cmd->bindValue(1, $id);
        $cmd->execute();
    }
}

?>
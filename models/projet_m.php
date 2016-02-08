<?php

class Projet_m{

    private $base;
    //DONE
    public function __construct(){

        $co = new Connexion();
        $this->base = $co->connect();
    }
    //DONE
    public function getAll(){
        $cmd = $this->base->prepare("
            SELECT p.idProjet, p.titreProjet,
                c.nomCategorie,
                t.text,
                i.linkImage
            FROM projet p, categorie c, text t, image i
            WHERE p.categorieProjet = c.idCategorie
            AND c.imageCategorie = i.idImage
            AND descriptionProjet = idText");
        $cmd->execute();
        return $cmd->fetchAll();
    }
    //DONE
    public function insert($data){

        $cmd = $this->base->prepare("INSERT INTO text (text) VALUES (?)");
        $cmd->bindValue(1, $data['description']);
        $cmd->execute();
        $idText = $this->base->lastInsertId();

        $cmd = $this->base->prepare("INSERT INTO projet
          (titreProjet, categorieProjet, descriptionProjet)
          VALUES (?, ?, ?)");
        $cmd->bindValue(1, $data['titre']);
        $cmd->bindValue(2, $data['categorie']);
        $cmd->bindValue(3, $idText);
        $cmd->execute();
    }

    public function update($date){

    }
    //DONE
    public function delete($id){
        $cmd = $this->base->prepare("DELETE FROM projet WHERE idProjet = ?");
        $cmd->bindValue(1, $id);
        $cmd->execute();
    }
}

?>
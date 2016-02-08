<?php

class Asso_m{

    private $base;

    public function __construct(){

        $co = new Connexion();
        $this->base = $co->connect();
    }

    public function get(){
        $cmd = $this->base->prepare("
            SELECT t.idText, t.text, t.descText
            FROM text t
            WHERE t.descText = 'asso'");
        $cmd->execute();
        return $cmd->fetch();
    }

    public function set($data){

        if($this->get() == null)
            $cmd = $this->base->prepare("INSERT INTO text (text, descText) VALUES (?, 'asso')");
        else
            $cmd = $this->base->prepare("UPDATE text SET text = ? WHERE descText = 'asso'");

        $cmd->bindValue(1, $data['text']);
        $cmd->execute();
    }
}

?>
<?php

class Video_m{

    private $base;

    public function __construct(){

        $co = new Connexion();
        $this->base = $co->connect();
    }

}

?>
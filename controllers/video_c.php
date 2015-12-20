<?php

class Video{

    private $instanceOfVideo;
    private $instanceOfCategorie;

    public function __construct(){
        require_once("models/video_m.php");
        require_once("models/categorie_m.php");
        $this->instanceOfVideo = new Video_m();
        $this->instanceOfCategorie = new Categorie_m();
    }

    public function makeVideo($link){
        if(substr($link, 12, 7) == "youtube"){
            $id = substr($link, 32);
            return '<iframe width="420" height="315" src="https://www.youtube.com/embed/'.$id.'
                        " frameborder="0" allowfullscreen></iframe>';
        }
    }

    public function listeCategorie(){

        $categorie = $this->instanceOfCategorie->getAllCategorie();

        include("views/head_v.php");
        include("views/nav_v.php");
        include("views/video_categorie_v.php");
        include("views/foot_v.php");

    }

    public function liste(){

        $video = $this->instanceOfVideo->getAllVideo();

        include("views/head_v.php");
        include("views/nav_v.php");
        include("views/liste_video_v.php");
        include("views/foot_v.php");
    }

    public function video($id){

    }
}


?>
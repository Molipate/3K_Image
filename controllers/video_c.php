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

    public function makeVideo($link, $w){
        if(substr($link, 12, 7) == "youtube"){
            $id = substr($link, 32);
            return '<iframe width="'.$w.'" height="'.$w * (9 / 16).'" src="https://www.youtube.com/embed/'.$id.'
                        " frameborder="0" allowfullscreen></iframe>';
        }
    }

    public function index(){

        $categorie = $this->instanceOfCategorie->getAllCategorie();

        include("views/head_v.php");
        include("views/nav_v.php");
        include("views/video/index_video_v.php");
        include("views/foot_v.php");
    }

    public function categorie($id){

        $video = $this->instanceOfVideo->getAllFromCategorie($id);

        include("views/head_v.php");
        include("views/nav_v.php");
        include("views/video/liste_video_v.php");
        include("views/foot_v.php");
    }

    public function video($id){
        $v = $this->instanceOfVideo->getVideo($id);

        include("views/head_v.php");
        include("views/nav_v.php");
        include("views/video/video_v.php");
        include("views/foot_v.php");
    }
}


?>
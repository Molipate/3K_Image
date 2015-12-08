<?php
session_start();
if(empty($_SESSION['connexion'])){
    $_SESSION['connexion'] = "false";
}
include("config.php");
include("connexion_bdd.php");
include("kernel.php");

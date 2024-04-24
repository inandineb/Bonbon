<?php

session_start();

include("vues/header.php");

if(empty($_GET["uc"]))
{
    $uc="accueil";

}

else 
{
    $uc=$_GET["uc"];
}

switch($uc)
{
    case"accueil":
        include("vues/accueil.php");
        break;
    

    case"produit":
        include("controleurs/produits.php");
        break;

    
}
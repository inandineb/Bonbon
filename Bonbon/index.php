<?php

include "produit.php";

$prod1 = new produit('1', '1', 'fraise','10', 'jhgh');
$prod2 = new produit('2', '1','chocolat','15', 'jhgh');
 ;
foreach(Produit::$mesProduits  as $produit){
echo $produit->nom;
echo $produit->prix;
echo $produit->photo;
}
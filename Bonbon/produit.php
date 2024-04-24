<?php
class produit{
    private $id;
    private $nom ;
    private $prix ;
    private $photo ;
    private $idCat ;

public function getId(){
    return $this->id;
}
public function getIdCat(){
    return $this->idCat;
}
public function setNom(){
    $this->nom=$nom;
    return $this->nom;
}
public function setPrix(){
    $this->prix=$prix;
    return $this->prix;
}
public function setPhoto(){
    $this->photo=$photo;
    return $this->photo;

}
public static $mesProduits=array();

public function __construct($id,$idCat,$nom,$prix,$photo){

    $this->id=$id;
    $this->idCat=$idCat;
    $this->nom=$nom;
    $this->prix=$prix;
    $this->photo=$photo;
    self::$mesProduits[]=$this;
}
}








?>
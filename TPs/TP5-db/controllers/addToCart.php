<?php
session_start();

include_once("db.php");
$id=$_GET["id"];
$prod=getProductById($id);
if($prod){
    if(!isset($_SESSION["cart"])){
        $_SESSION["cart"]=[];
       
        array_push($_SESSION["cart"],["id"=>$prod->id, "image"=>$prod->image, "titre"=>$prod->titre, "prix"=>$prod->prix, "qtt"=>1]);
        $_SESSION["total"]=$prod->prix;
        echo $id."First Prod added";
    }else{
        $p=array_filter($_SESSION["cart"], function($e) use($id){
            return $e["id"]==$id;
        });
        if(count($p)){
            echo $id." QTT changed";
        } 
        else{
            array_push($_SESSION["cart"],["id"=>$prod->id, "image"=>$prod->image, "titre"=>$prod->titre, "prix"=>$prod->prix, "qtt"=>1]);
            echo $id."New Prod added";
        } 
            
    }
    header("Location:/");    
}
else header("Location:/vvv");    

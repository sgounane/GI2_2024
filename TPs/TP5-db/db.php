<?php

function connect(){
    try {
        $db = new PDO('mysql:host=localhost;dbname=hanouti', 'root', '');
        return $db;
        }catch(PDOException $e){
            echo $e->getMessage();
            //exit(-1);
            die();
        }

}

    //

    
function getProducts($db){
    $req=$db->prepare("SELECT * FROM produits");
    //var_dump($req);
    $req->execute();
    //$prods=$req->fetchAll();
    $prods=$req->fetchAll(PDO::FETCH_OBJ);
return $prods;
}

function getProductById($db,$id){
    $req=$db->prepare("SELECT * FROM produits WHERE id=:id ");
    $req->execute(["id"=>$id]);
    //$prods=$req->fetchAll();
    $prods=$req->fetch(PDO::FETCH_OBJ);
return $prods;
}


function getUsers(){
    $users=json_decode(file_get_contents("data/users.json"));
    return $users;
    }

?>
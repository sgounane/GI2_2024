<?php
$base="/ClientSide";

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

$db=connect();

    //

    
function getProducts(){
    global $db;
    $req=$db->prepare("SELECT * FROM produits");
    //var_dump($req);
    $req->execute();
    //$prods=$req->fetchAll();
    $prods=$req->fetchAll(PDO::FETCH_OBJ);
return $prods;
}

function getProductById($id){
    global $db;
    $req=$db->prepare("SELECT * FROM produits WHERE id=:id ");
    $req->execute(["id"=>$id]);
    //$prods=$req->fetchAll();
    $prods=$req->fetch(PDO::FETCH_OBJ);
return $prods;
}


function getUsers(){
    global $db;
    $req=$db->prepare("SELECT * FROM users");
    //var_dump($req);
    $req->execute();
    //$prods=$req->fetchAll();
    $users=$req->fetchAll(PDO::FETCH_OBJ);

    return $users;
    }


    function getUser($email, $password){
        global $db;
        $req=$db->prepare("SELECT * FROM users WHERE email=:email AND password=:password" );
        $req->execute(["email"=>$email,"password"=>$password]);
        //$prods=$req->fetchAll();
        $user=$req->fetch(PDO::FETCH_OBJ);
    return $user;
    }

    function ajoutProduit($ttr,$prx,$img,$disc){
        global $db;
        $req=$db->prepare("INSERT INTO produits(titre, prix, image, description) VALUES(:t, :p, :i, :d )");
        $req->execute(["t"=>$ttr, "p"=>$prx, "i"=>$img, "d"=>$disc]);

    return $req;
    }


?>

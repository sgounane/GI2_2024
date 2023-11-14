<?php
function getProducts(){
$prods=json_decode(file_get_contents("data/produits.json"));
return $prods;
}

function getUsers(){
    $users=json_decode(file_get_contents("data/users.json"));
    return $users;
    }

?>
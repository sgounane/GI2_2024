<?php
try {
$db = new PDO('mysql:host=gounane.ovh;dbname=atlas_db', 'atlas', 'Atlas@2023');
}catch(PDOException $e){
    echo $e->getMessage();
    //exit(-1);
    die();
}
$req=$db->prepare("SELECT * FROM Prof");

<?php
session_start();
//var_dump($_FILES);
include_once("db.php");
$path=basename($_FILES["photo"]["name"]);
//echo $path;
$ext=pathinfo($path,PATHINFO_EXTENSION);

$newName="images/".time().".".$ext;
move_uploaded_file($_FILES["photo"]["tmp_name"], "../".$newName);

ajoutProduit($_POST["titre"],$_POST["prix"],$newName,$_POST["description"]);

header("Location: /");
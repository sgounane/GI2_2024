<?php
include_once("config.php");
$path=$_SERVER["REQUEST_URI"];
header("Content-type: application/json");

switch($path){
    case $base."/index.php":  
    case $base."/" : 
        header("Location:".$base."/views/home.php");
        break;
    case $base."/articles":
        $p=getProducts();
        $p=json_encode($p);
        echo $p;
        break;
    default : echo "{error:Not found}";
}


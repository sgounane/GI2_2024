<?php
session_start();
$path=$_SERVER["REQUEST_URI"];
switch($path){
case "/": header("Location:views/home.php");break;
case "/add": header("Location:views/prodForm.php");break;
case "/login": header("Location:views/login.php");break;
case "/logout": header("Location:controllers/logout.php");break;

default: header("Location:views/notfound.php");
    
}

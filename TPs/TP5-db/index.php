<?php
session_start();
$path=$_SERVER["REQUEST_URI"];
$basedir="";
switch($path){
case $basedir."/": header("Location:views/home.php");break;
case $basedir."/add": header("Location:views/prodForm.php");break;
case $basedir."/login": header("Location:views/login.php");break;
case $basedir."/logout": header("Location:controllers/logout.php");break;

default: header("Location:views/notfound.php");
    
}

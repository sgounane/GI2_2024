<?php
session_start();
include_once("db.php");
if(isset($_POST["login"])){
    $users=getUsers();
    var_dump($users[0]);
}else{
    header("Location:index.php");
}
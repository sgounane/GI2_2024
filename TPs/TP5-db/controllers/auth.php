<?php
session_start();
include_once("db.php");
if(isset($_POST["login"])){
    $user=getUser($_POST["email"],$_POST["password"]);
    if($user) $_SESSION["user"]=["email"=>$user->email, "role"=>$user->role];
}
header("Location:index.php");

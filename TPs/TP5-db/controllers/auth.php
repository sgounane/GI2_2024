<?php
session_start();
include_once("db.php");
if(isset($_POST["login"])){
   //echo "auth";
    $user=getUser($_POST["email"],$_POST["password"]);
    if($user) $_SESSION["user"]=["email"=>$user->email, "role"=>$user->role];
    //var_dump($user);
}
//echo $_SERVER["REQUEST_METHOD"];
header("Location:/");

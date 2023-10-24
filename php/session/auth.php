<?php
session_start();
if(isset($_POST["login"])){

    if(isset($_POST["login"]) && $_POST["user"]=="said" && isset($_POST["password"]) && $_POST["password"]=="123"){
        $_SESSION["user"]=$_POST["user"];
        unset($_SESSION["error"]);
        header("Location: index.php");
    }
        
    else{
        $_SESSION["error"]="Lgin ou Password incorecte!!";
        header("Location: login.php");
    }
}
else if(isset($_POST["logout"])){
    session_destroy();
    header("Location: login.php");
} 
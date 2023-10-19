<?php 
session_start();

$_SESSION["data"]=array_filter($_SESSION["data"],
                    function($key){
    return $key != $_GET["id"];
}, ARRAY_FILTER_USE_KEY);

header("Location: index.php");

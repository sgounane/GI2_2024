<?php
session_start();
//var_dump($_FILES);
include_once("db.php");
ajoutProduit("Thinkpad",6789,"images/3.jpg","Un mini laptop");
header("Location: index.php");
<?php
    include_once("db.php");
    $prod=getProductById($_GET["id"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Dtail</title>
</head>
<body>
<img src=<?=$prod->image ?> alt="" class="prodimg">
<h3><?=$prod->titre ?></h3>
<h3><?=$prod->prix ?></h3>
<p><?=$prod->description ?></p>
</body>
</html>
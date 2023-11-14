<?php
    include_once("../controllers/db.php");
    $prod=getProductById($_GET["id"]);

    include_once("header.php");
?>

<img src=<?="../".$prod->image ?> alt="" class="prodimg">
<h3><?=$prod->titre ?></h3>
<h3><?=$prod->prix ?></h3>
<p><?=$prod->description ?></p>
<?php
include_once("footer.php");
?>
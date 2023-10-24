<pre>
<?php 
//var_dump(filter_list());
if (isset($_GET["name"])) {
    //$name=$_GET["name"];
    $name=htmlspecialchars($_GET["name"]);
    echo $name."<br>";
}
$a="gounane!#@gmail.com";
echo filter_var($a, FILTER_VALIDATE_EMAIL)."<br>";
$str="<h1> hi all</h1>";
echo htmlspecialchars($str) ;



?>

</pre>

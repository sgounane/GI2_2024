<pre>
<?php
include_once("./fruit.php");
include_once("./aquatiq.php");

echo "Construct ...... <br>";
$apple=new Fruit("apple1","green");
$banana=new Fruit("B001","green");
$avocado=new Aquatiq("Avoca","green","Taiwan");

echo $apple->to_string();
echo $banana->to_string();
echo $avocado->to_string();

var_dump($apple instanceof Fruit);
var_dump($apple instanceof Aquatiq);

var_dump($avocado instanceof Fruit);
var_dump($avocado instanceof Aquatiq);

var_dump($apple->get_name());
var_dump($apple->get_color());

var_dump($banana->get_name());
var_dump($banana->get_color());

var_dump($avocado->get_name());
var_dump($avocado->get_color());

echo "Set_name set_color ...... <br>";
$apple->set_name("Apple0");
$apple->set_color("Red");

$banana->set_name("Banana0");
$banana->set_color("Yellow");

var_dump($apple->get_name());
var_dump($apple->get_color());

var_dump($banana->get_name());
var_dump($banana->get_color());

?>
</pre>
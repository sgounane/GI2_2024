
<pre>
<?php
//header("content-type:text/html");
//json encode : data structur --->  string (json)
$data = array( "Reda", "Hanane", "Mohammed" );
var_dump(json_encode($data));

$data = array( "Reda"=>15, "Hanane"=>20, "Mohammed"=>19 );
var_dump(json_encode($data));

$str='{"non": "gounane", "age":24, "note": 10}';
#$str="[1,2,3]";
var_dump($str);

$ary=json_decode($str,false);
var_dump($ary);
?>


</pre>
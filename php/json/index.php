
<pre>
<?php
//header("content-type:text/html");
//json encode : data structur --->  string (json)
$data = array( "Reda", "Hanane", "Mohammed" );
echo json_encode($data);

$data = array( "Reda"=>15, "Hanane"=>20, "Mohammed"=>19 );
echo json_encode($data);
?>
</pre>
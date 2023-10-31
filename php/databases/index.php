<pre>
<?php
try {
$db = new PDO('mysql:host=gounane.ovh;dbname=atlas_db', 'atlas', 'Atlas@2023');
}catch(PDOException $e){
    echo $e->getMessage();
    //exit(-1);
    die();
}

$req=$db->prepare("SELECT * FROM Prof");
$req->execute();
$res=$req->fetchAll();
//var_dump($res);

foreach($res as $prof){
    echo "id: ".$prof["id"].", name: ".$prof["name"]. "<br>";   
}

$sql = 'INSERT INTO Prof(cin, name) VALUES (:cin, :name)';
$req = $db->prepare($sql);
$req->execute(['cin'=>'E453434','name'=>'Gounane']);
var_dump($req);

echo "Connection established."
?>

</pre>

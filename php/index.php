<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <?php 
    include("tools.php");
    $nom="said" ;
    $a=12;
    $b=25;
    $c=add($a,$b);
    echo "<h1>Bonjour $nom</h1>";
    echo "$a+$b=$c";
    $areacode = "(208)";
    $contact = '+1' . $areacode . '1234567';
    echo $contact;
    echo "<br>";
    echo substr("salut tous",3,4);
    //date_default_timezone_set('Africa/Casablanca');
    date_default_timezone_set('America/New_York');
    $d=date("d-M-Y h-m-s", strtotime("next day"));
    echo "<br> $d";

    //Les Tableaux

    $tab=["un", "deux", 6];
   


    $tab_assoc=["key1"=>"un", "key2"=>"deux", "key3"=> 6];
    afficheTab($tab_assoc);
    
    echo "<br>"  . $tab_assoc['key2'];
    echo "************";
    afficheTab($tab);
    $new_tab=array_splice($tab,1,1);
    afficheTab($tab);
    afficheTab($new_tab);
    ?>
</body>
</html>
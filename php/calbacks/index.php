<pre>
<?php
$tab=[-1,0,4,-9,10,14];

// function isPositif($a){
//     return $a>0;
// }
// $tabplus=array_filter($tab,"isPositif");
echo "Tab: <br>";
print_r($tab);

echo "Filter: <br>";
$tabplus=array_filter($tab,function($elem){
    return $elem>0;
});
print_r($tabplus);

echo "Reduce: <br>";
$arrysum=array_reduce($tab,function($mem,$elem){
    return $mem+$elem;
},0);

echo $arrysum."<br>";

echo "Map: <br>";
$tabsquare=array_map(function($elem){
    return $elem*$elem;
},$tab);

print_r($tabsquare);

echo "Search: <br>";
$tabsearch=array_search(4,$tab);

var_dump($tabsearch);

// user difined callback

function ask($str){
    return $str."?";
}

function exclam($str){
    return $str."!";
}

function formatedStr($str,$calback){
    echo $calback($str)."<br>";
}
formatedStr("Bonjour","exclam");
formatedStr("Votre nom SVP","ask");
formatedStr("to be contunued",function($str){
    return $str."....";
});
?>
</pre>
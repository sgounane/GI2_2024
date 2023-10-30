<pre>
<?php

function divide($a,$b){
   // if($b==0) throw new Exception("b==0 !!!");
    return $a/$b;
}

try{
    $res=divide(5,0);
}catch(DivisionByZeroError $e){
    echo $e->getMessage();
}catch(Exception $e){
    echo $e->getMessage();
}finally{
    echo "close file"; s
}
echo "end";
?>
</pre>
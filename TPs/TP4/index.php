<pre>
<?php
        include_once("./math.php");
        include("./jsonToCsv.php");
        include_Once("./csvDecode.php");
    try{

        $result= jsonToCsv("./users.json");
        #var_dump( $result);
    }catch(Exception $e){
        echo $e->getMessage();
    }
      var_dump(csvDecode("un,4,5,ui"));
      
    
    
    ?>
</pre>
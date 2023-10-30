
<?php
    include_once("./math.php");
    add(2,4);
  
    function jsonToCsv($path){
        $str="";
        try{
            $f=fopen($path,"r");
            $csv=fopen("./users.csv","w");
            $str=fread($f, filesize($path));
            $users=json_decode($str,true);
            foreach($users as $user){
                fwrite($csv,$user["id"].",".$user["mail"].",".$user["age"].",".$user["password"]."\n");
            }
            
            
        }catch(TypeError $e){
            $str=false;
        }catch(JsonException $e){
            $str=[];
        }catch(Exception $e){
            $str=false;
        }finally{
            if($f) fclose($f);
        }
        if(!$str) throw new Exception("Bad formated JSON");
        return $str;
    }
?>

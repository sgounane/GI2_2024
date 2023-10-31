<?php
include_once("./fruit.php");
class Aquatiq extends Fruit{
    private $origine;

     function __construct($name,$color,$origine){
        parent::__construct($name,$color);
        // $this->set_name($name);
        // $this->set_color($color);
        $this->origine=$origine;
     }
    function get_origine(){
        return $this->origine;
    }

    function set_origine($origine){
         $this->origine=$origine;
    }

    function to_string(){
        return "Aquatiq ".parent::to_string();
        //return "Aquatiq Fruit: {".$this->get_name().", ".$this->get_color().", ".$this->origine."}<br>";
    }

}
?>
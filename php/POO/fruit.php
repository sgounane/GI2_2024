<?php
class Fruit{
    private $name;
    private $color;

    function __construct($name, $color){
        $this->name=$name;
        $this->color=$color;
    }

    function set_name($name){
        $this->name=$name;
    }

    function set_color($color){
        $this->color=$color;
    }

    function get_color(){
        return $this->color;
    }

    function get_name(){
        return $this->name;
    }

    function to_string(){
        return "Fruit: {".$this->name.", ".$this->color."}<br>";
    }

    function __destruct(){
        echo "$this->name will be destructed <br>";
    }
}
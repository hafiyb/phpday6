<?php

class user{
    public $name;
    public $id;

    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }

    function set_id($id){
        $this->id = $id;
    }

    function get_id(){
        return $this->id;
    }
}


?>
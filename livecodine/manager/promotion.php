<?php
class Promotion{
    private $id;
    private $name;

    public function get_id(){
        return $this->id;
    }
    public function set_id($id){
        $this->id=$id;
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name){
        $this->name=$name;
    }
}
?>
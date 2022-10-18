<?php
class connection{
    private $localhost;
    private $user;
    private $password;
    private $db;

    public function connect(){
        $this->localhost="localhost";
        $this->user="root";
        $this->password="";
        $this->db="gestion_promo";

        $con=new mysqli($this->localhost,$this->user,$this->password,$this->db);
        return $con;
    }
}


?>
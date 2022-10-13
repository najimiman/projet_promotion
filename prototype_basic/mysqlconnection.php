<?php
class Connection{
    // properties declaration
    private $host;
    private $user;
    private $password;
    private $db;

    // method ( function )

    protected function connect(){
        
        $this->host= "localhost";
        $this->user = "root";
        $this->password= "";
        $this->db = "gestion_promo";

        $conn = new mysqli($this->host, $this->user, $this->password, $this->db);
        return $conn;
    }


}
?>
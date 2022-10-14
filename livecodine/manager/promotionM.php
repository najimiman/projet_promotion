<?php
include "promotion.php";
include "myconnectio.php";

class promotionM extends Promotion{
public function conn(){
    $c=new connection;

    return $c->connect();
}
    public function insert($promotion){
        $name=$promotion->get_name();
        $row="INSERT INTO promotion(name) VALUES('$name')";
        mysqli_query($this->conn(),$row);
    }
}
?>
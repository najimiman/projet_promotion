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
    public function getallpromotion(){
        $req="SELECT * FROM promotion";
        $exec=mysqli_query($this->conn(),$req);
        $promotionl=mysqli_fetch_all($exec,MYSQLI_ASSOC);
        $promotionlist=array();
        foreach($promotionl as $value){
            $promotion=new Promotion();
            $promotion->set_id($value["id"]);
            $promotion->set_name($value["name"]);
            array_push($promotionlist,$promotion);
        }
        return $promotionlist;
    }
    public function getidpromotion($id){
        $req="SELECT * FROM promotion where id=$id";
        $exec=mysqli_query($this->conn(),$req);
        $promotionl=mysqli_fetch_assoc($exec);
        $promotion=new Promotion();
            $promotion->set_id($promotionl["id"]);
            $promotion->set_name($promotionl["name"]);
            return $promotion;
    }
    public function delete($id){
        $req="DELETE FROM promotion where id=$id";
        mysqli_query($this->conn(),$req);
    }
    public function update($id,$name){
        $req="UPDATE promotion set name='$name' where id=$id";
        mysqli_query($this->conn(),$req);
    }
}
?>
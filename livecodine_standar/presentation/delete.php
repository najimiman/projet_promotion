<?php
include "../manager/promotionM.php";
$promotionM=new promotionM();
if(isset($_GET["id"])){
    $id=$_GET["id"];
    $promotionM->delete($id);
    header("location:index2.php");
}
?>
<?php
include "PromotionM.php"; 
if(isset($_GET['id'])){
    $id = $_GET['id'];

$PromotionM=new PromotionM();
$PromotionM->deletePromotion($id);
header('Location: index.php');
}
?>
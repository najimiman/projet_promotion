<?php 

include 'classpromotion.php';
$a=$_GET["id"] ?? '';
$sta = new promotion();
$sta->supprimer($a);
echo "yes dlete";
header("location:index1.php");

?>
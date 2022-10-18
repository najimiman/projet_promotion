<?php
include "../manager/promotionM.php";
$promotionM=new promotionM();
if(isset($_GET["id"])){
    $id=$_GET["id"];
    $promotion=$promotionM->getidpromotion($id);
}
if(isset($_POST["update"])){
    $id=$_POST["id"];
    $name=$_POST["name"];
    $promotionM->update($id,$name);
    header("location:index2.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
<input name="id" type="hidden" value="<?php  echo $promotion->get_id() ?>">
<input name="name" type="text" value="<?php echo $promotion->get_name() ?>">
<button name="update">update</button>
    </form>
</body>
</html>
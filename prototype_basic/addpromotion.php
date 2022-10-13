<?php
include "PromotionM.php"; 
//pour inicialise class
$PromotionM=new PromotionM();
if(!empty($_POST)){
    $Promotion=new Promotion();
    $Promotion->setName($_POST['name']);
    $PromotionM->addPromotion($Promotion);
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
<form action="" method="POST">
Nom de promotion: <input type="text" name="name" >
<button type="submit">Envoyer</button>
</form>
</body>
</html>
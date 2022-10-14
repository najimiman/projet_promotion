<?php
include "../manager/promotionM.php";
$promotionM=new promotionM();
if(isset($_POST["name"])){
    $Promotion=new Promotion();
    $Promotion->set_name($_POST["name"]);
    $promotionM->insert($Promotion);

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
<input type="text" name="name"/>
<button>envoyer</button>
    </form>
</body>
</html>
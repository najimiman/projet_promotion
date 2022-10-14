<!DOCTYPE html>
<?php
include "PromotionM.php"; 
$PromotionM=new PromotionM();
$data = $PromotionM->getAllPromotions();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
        <a href="addpromotion.php">Ajouter promotion</a>
        <table>
            <tr>
                <th>Nom promotion</th>
            </tr>

            <?php
                    foreach($data as $Promotion){
            ?>

            <tr>
                <td><?= $Promotion->getName()?></td>
                <td>
                    <a href="deletepromotion.php?id=<?php echo $Promotion->getId() ?>">Supprimer</a>
                    <a href="updatePromotion.php?id=<?php echo $Promotion->getId() ?>">Modifier</a>
                </td>
            </tr>
            <?php }?>
        </table>
    </div>
</body>
</html>
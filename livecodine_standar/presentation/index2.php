<?php
include "../manager/promotionM.php";

$promotionM=new promotionM();
$data=$promotionM->getallpromotion();

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
    <table>
        <tr><td><a href="index.php">ajouter</a></td></tr>
        <?php
        foreach($data as $promotion){
        ?>
        <tr>
            <td><?php echo $promotion->get_name() ?></td>
            <td><a href="delete.php?id=<?php echo $promotion->get_id() ?>">supprimer</a></td>
            <td><a href="update.php?id=<?php echo $promotion->get_id() ?>">modifier</a></td>
        </tr>

        <?php } ?>
    </table>
</body>
</html>

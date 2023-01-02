<?php
include("conf.php");
if(isset($_POST['input'])){
    $input=$_POST['input'];
    $query="SELECT * FROM promotion where nompromotion LIKE '{$input}%'";
    $result=mysqli_query(connecte(),$query);
    if(mysqli_num_rows($result) > 0){?>
<table class="table table-bordered">
    <thead>
            <th>id</th>
            <th>nompromotion</th>
    </thead>
    <tbody>
        <?php 
        while ($row=mysqli_fetch_assoc($result)) {
            $id=$row['id'];
            $nompromotion=$row['nompromotion'];
            ?>
            <tr>
                <td><?php echo $id;?></td>
                <td><?php echo $nompromotion;?></td>
                <td><a class="btn btn-danger" name="btns" href="delete.php?id=<?php echo $id; ?>">Supprimer</a></td>
                    <td><a class="btn btn-warning" name="btnm" href="formupdate.php?id=<?php echo $id; ?>">Modifier</a></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
    </table>
    <?php
    }
    else{
        echo "<h6>no result</h6>";
    }
}

?>
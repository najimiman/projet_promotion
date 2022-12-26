<?php
include("conf.php");
if(isset($_POST['input'])){
    $input=$_POST['input'];
    $query="SELECT * FROM promotion where nompromotion LIKE '{$input}%'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result) > 0){?>
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>nompromotion</th>
    </tr>
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
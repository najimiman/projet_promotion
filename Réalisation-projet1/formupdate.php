<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    //include 'conf.php';
    $id=$_GET['id'];
    include 'classpromotion.php';
    //include("conf.php");
    
  
   //$sta = new promotion();
   
   $rdata=mysqli_query(connecte(),"SELECT * FROM promotion where id=$id ");
    $data=mysqli_fetch_array($rdata);

    if(isset($_POST["btnm"])){
        $a=$_GET["id"] ?? '';
        $b=$_POST["nm"] ?? '';
        $sta = new promotion();
        $sta->modifier($b,$a);
        echo "yes modifer";
        header("location:index1.php");
    }
    /*$obj=new promotion();
    $obj->fetch();*/
    
    //header("location:inupdepromotion.php");
    ?>
    <form method="post">
        Nom:<input type="text" name="nm" value="<?php echo $data['nompromotion']?>"/><br>
    <button type="submit" name="btnm"value="modifeir">modifier</button>
    </form>
</body>
</html>
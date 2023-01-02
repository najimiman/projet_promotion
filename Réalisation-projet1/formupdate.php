<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php

    //include 'conf.php';
    $id = $_GET['id'];
    include 'classpromotion.php';
    //include("conf.php");


    //$sta = new promotion();

    $rdata = mysqli_query(connecte(), "SELECT * FROM promotion where id=$id ");
    $data = mysqli_fetch_array($rdata);

    if (isset($_POST["btnm"])) {
        $a = $_GET["id"] ?? '';
        $b = $_POST["nm"] ?? '';
        $sta = new promotion();
        $sta->modifier($b, $a);
        echo "yes modifer";
        header("location:index1.php");
    }
    /*$obj=new promotion();
    $obj->fetch();*/

    //header("location:inupdepromotion.php");
    ?>
    <div style="padding:40px;  width:700px; margin:auto;">
        <div style="padding: 20px 0px;">
            <form method="post">
                <div class="row g-2" style="align-items:center;">
                    <div class="col-md">
                        Nom:<input type="text" class="form-control" name="nm" value="<?php echo $data['nompromotion'] ?>" /><br>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <button type="submit" class="btn btn-success btn-lg" name="btnm" value="modifeir">modifier</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
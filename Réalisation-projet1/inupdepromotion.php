<?php
require 'classpromotion.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["btn"])) {
        if (empty($_POST['nm'])) {
            echo "remlir";
        } else if (isset($_POST['nm'])) {
            $a = $_POST["nm"] ?? '';
            $sta = new promotion();
            $sta->ajouter($a);
            echo "yes";
            header("location:index1.php");
            //$nn=new promotion();
            //$nn->actualise();
        }
    }
    /*if(isset($_POST["btns"])){
        
        $a=$_POST["nm"] ?? '';
        $sta = new promotion();
        $sta->supprimer($a);
        echo "yes dlete";
        $nn=new promotion();
        $nn->actualise();
        
    }*/
    /*if(isset($_POST["btnm"])){
        
        $a=$_POST["nm"] ?? '';
        $sta = new promotion();
        $sta->modifier($a,$b);
        echo "yes update";
        $nn=new promotion();
        $nn->actualise();
    }  */
}
//$obj=new promotion();
//$obj->fetch();
?>
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
    <div style="padding:40px;  width:700px; margin:auto;">
        <div style="padding: 20px 0px;">
            <form method="post">
                <div class="row g-2" style="align-items:center;">
                    <div class="col-md">
                        Nom:<input type="text" class="form-control" name="nm" placeholder="nom de promotion" /><br>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <button type="submit" name="btn" class="btn btn-success btn-lg">envoyer</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
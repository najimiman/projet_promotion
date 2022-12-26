<?php
require 'classpromotion.php';


if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if(isset($_POST["btn"])){
        if (empty($_POST['nm'])){
            echo "remlir";
        } 
        else if(isset($_POST['nm'])){
            $a=$_POST["nm"] ?? '';
            $sta = new promotion();
            $sta->ajouter($a);
            echo"yes"; 
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
</head>
<body>
<form method="post">
        Nom:<input type="text" name="nm" placeholder="nom de promotion"/><br>
    <button type="submit" name="btn"value="ok">envoyer</button>
    </form>
</body>
</html>
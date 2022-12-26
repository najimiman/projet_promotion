<?php
 

 function connecte()
{
    $localhost = "localhost";
    $user = "root";
    $password = "";
    $db = "gestion-promotion";

    $con = mysqli_connect($localhost, $user, $password, $db);
    return $con;
}

?>
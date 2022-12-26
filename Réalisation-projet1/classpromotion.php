<?php
include 'conf.php';
class promotion
{
    /*public function connecte(){
        $localhost="localhost";
 $user="root";
 $password="";
 $db="gestion-promotion";

 $con=mysqli_connect($localhost,$user,$password,$db);
    return $con;
}*/
    public function ajouter($a)
    {
        $req = "INSERT INTO promotion(nompromotion) VALUES('$a')";
        mysqli_query(connecte(), $req);
    }
    public function supprimer($a)
    {
        $req = "DELETE FROM promotion WHERE id='$a'";
        mysqli_query(connecte(), $req);
    }
    public function modifier($a, $b)
    {
        $req = "UPDATE promotion SET nompromotion='$a'  WHERE id =$b";
        mysqli_query(connecte(), $req);
    }
    public function fetch()
    {
        $req = "SELECT * FROM promotion";
        $q = mysqli_query(connecte(), $req);
?>
        <table id="searchresulta">
            <?php
            while ($r = mysqli_fetch_array($q)) {
            ?>
                <tr>
                    <td><?php echo $r['id']; ?></td>
                    <td><?php echo $r['nompromotion']; ?></td>
                    <td><a href="delete.php?id=<?php echo $r['id']; ?>"><button type="submit" name="btns" value="suppremer">supremer</button></a></td>
                    <td><a href="formupdate.php?id=<?php echo $r['id']; ?>"><button type="submit" name="btnm" value="modifeir">modifier</button></a></td>

                </tr>
            <?php } ?>
        </table>
<?php
    }
    public function actualise()
    {
        $req = "SELECT * FROM promotion ";
        $q = mysqli_query(connecte(), $req);
    }
}
?>
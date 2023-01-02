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
        <table id="searchresulta" class="table table-bordered">
            <thead>
                <th>id</th>
                <th>nompromotion</th>
            </thead>
            <tbody>
                <?php
                while ($r = mysqli_fetch_array($q)) {
                ?>
                    <tr>
                        <td><?php echo $r['id']; ?></td>
                        <td><?php echo $r['nompromotion']; ?></td>
                        <td><a class="btn btn-danger" name="btns" href="delete.php?id=<?php echo $r['id']; ?>">Supprimer</a></td>
                        <td><a class="btn btn-warning" name="btnm" href="formupdate.php?id=<?php echo $r['id']; ?>">Modifier</a></td>

                    </tr>
            
        <?php } ?>
        </tbody>
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
<?php
require_once "../business/promotionBLL.php";

$promotionBAL = new promotionBLL();
//Getting value of "search" variable from "script.js".
if (isset($_POST['search'])) {
   //Search box value assigning to $name variable.
   $name = $_POST['search'];
   //Search query.
   $results = $promotionBAL->searchByTitle($name);
   //Creating unordered list to display result.
?>

   <table>
      <tr>
         <th>Nom promotion</th>
      </tr>

      <?php
      foreach ($results as $promotion) {
      ?>

         <tr>
            <td><?= $promotion['name'] ?></td>
            <td>
               <a href="deletePromotion.php?id=<?php echo $promotion['id'] ?>">Supprimer</a>
               <a href="updatePromotion.php?id=<?php echo $promotion['id'] ?>">Modifier</a>
            </td>
         </tr>
      <?php } ?>
   </table>
   <?php } ?>
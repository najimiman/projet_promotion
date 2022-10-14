<?php
include_once "../business/promotionBLL.php";


$promotionBAL = new promotionBLL();

$data = $promotionBAL->getAllPromotions();

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#search').keyup(function() {
            var input = $(this).val();
            // alert(input);

            if (input != ' ') {
                $.ajax({
                    url: "search.php",
                    method: "POST",
                    data: {
                        key: input
                    },
                    success: function(data) {
                        $('#showS').html(data);
                    }
                });

            }

        });
    });
</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Including jQuery is required. -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- Including our scripting file. -->
    <script type="text/javascript" src="javascript/script.js"></script>
    <title>Promotion management</title>
</head>

<body>
    <div>
        <a href="addPromotion.php">Ajouter promotion</a>
        <!-- Search box. -->
        <input type="text" id="search" placeholder="Search" />
        <br>
        <!-- Suggestions will be displayed in below div. -->


        <div id="results">

            <table>
                <tr>
                    <th>Nom promotion</th>
                </tr>

                <?php
                foreach ($data as $promotion) {
                ?>

                    <tr>
                        <td><?= $promotion->getName() ?></td>
                        <td>
                            <a href="deletePromotion.php?id=<?php echo $promotion->getId() ?>">Supprimer</a>
                            <a href="updatePromotion.php?id=<?php echo $promotion->getId() ?>">Modifier</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>

</html>
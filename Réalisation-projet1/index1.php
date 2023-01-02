<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div style="padding:40px;  width:800px; margin:auto;">
        <div style="padding: 20px 0px;">
            <div class="row g-2" style="align-items:center;">
                <div class="col-md">
                        <input type="text" id="live_search" autocomplete="off" placeholder="search" class="form-control me-2" style="width:450px;" aria-label="Recipient's username" aria-describedby="basic-addon2" />
                </div>
                <div class="col-md">
                    <a href="inupdepromotion.php"><button type="submit" name="btn" class="btn btn-outline-primary fw-bolder">Ajouter</button></a>
                </div>
            </div>
        </div>
        <!-- <div id="searchresulta"></div> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#live_search').keyup(function() {
                    var input = $(this).val();
                    //alert(input);

                    $.ajax({
                        url: "livesearch.php",
                        method: "POST",
                        data: {
                            input: input
                        },
                        success: function(data) {
                            $("#searchresulta").html(data);
                        }
                    });

                });
            });
        </script>
        <?php
        require 'classpromotion.php';
        $obj = new promotion();
        $obj->fetch();

        ?>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery-3.6.0.js"></script>

</head>

<body>
    <input type="text" id="live_search" autocomplete="off" placeholder="search" class="form-control" />
    <div id="searchresulta"></div>
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
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>

        $(document).ready(function(){
            $("button").click(function(){
                $.get("text.txt", function(data, status) {
                    $("#test").html(data);
                    alert(status);
                });
            });
        });
    </script>

</head>
<body>
    <div class=""></div>

    <button>Click me to get data!</button>

    <p class="" id="test"></p>

</body>
</html>
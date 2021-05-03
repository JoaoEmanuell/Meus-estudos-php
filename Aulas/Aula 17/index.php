<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções str 2</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <?php       
        $txt = "O dia está muito está lindo hoje";
        $res = str_replace("está", "lindo", $txt);
        echo "$res";
    ?>
</body>
</html>
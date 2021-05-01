<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    <?php
        $c = 1;
        while ($c <= 5){
            $v = "num". $c;
            $url = "v". $c;
            $$v - isset($_POST[$url]) ? $_POST[$url] : 0;
            echo "Valor $c: $ <br>";
            $c ++;
        }
    ?>
</body>
</html>
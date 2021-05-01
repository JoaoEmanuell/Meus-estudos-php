<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
</head>
<body>
    <div>
    <?php
        /*
        for ($c = 1; $c <= 10; $c++){
            echo "<span>$c </span>";
        }
        echo "<br>";
        for ($c = 10; $c >= 1; $c--){
            echo "<span>$c </span>";
        }
        echo "<br>";
        for ($c = 0; $c <= 100; $c += 5){
            echo "<span>$c </span>";
        }
        echo "<br>";
        for ($c = 20; $c >= 1; $c -= 2){
            echo "<span>$c </span>";
        }
        */
        $np = isset($_POST['np']) ? $_POST['np'] : 1;
        $dv = 0;
        for ($c = $np; $c != 1; $c--){
            if ($np % $c == 1){
                $dv++;
            }
        }
        if ($dv = 2){
            echo "O numero $np é primo";
        }
        else{
            echo "O numero $np não é primo";
        }
        echo "<br>";
    ?>
    <a href="index.php">Voltar</a>
    </div>
</body>
</html>
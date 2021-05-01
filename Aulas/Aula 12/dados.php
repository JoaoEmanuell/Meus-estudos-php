<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do while</title>
</head>
<body>
    <div>
        <?php
            $tab = isset($_POST['tab']) ? $_POST['tab'] : 0;
            $c = 1;
            do {
                echo "<span>$tab * $c = ". ($tab * $c). "<br></span>";
                $c ++;
            } while ($c <= 10);
        ?>
    </div>
    <a href="index.html">Voltar</a>
</body>
</html>
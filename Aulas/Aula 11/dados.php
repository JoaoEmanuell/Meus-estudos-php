<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    <div>
        <form action="dados2.php" method="post">
            <?php
                $c = 1;
                while ($c <= 5){
                    echo "<span id='$c'>Valor $c: <input type='number' name='v$c' id='v$c'>
                    <br></span>";
                    $c ++;
                }
            ?>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>
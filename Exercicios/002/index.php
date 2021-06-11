<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 002</title>
    <?php
    echo"<style>
        p.resultado{
            margin: 5px;
        }
        div.Tabuada{
            margin-top: 15px;
        }
    </style>"
    ?>
</head>
<body>
    <h1>Tabuada</h1>
    <form action="index.php" method="GET">
        <p><label for="num">Número </label><input type="number" name="num" id="num" max="9999999"></p>
        <input type="submit" value="Enviar">
    </form>
    <div class="Tabuada">
        <?php
            $num = isset($_GET['num']) ? $_GET['num'] : 0;
            $mu = 1;
            while ($mu < 11){
                $res = $num * $mu;
                echo "<p class='resultado'>$num * $mu = $res</p>";
                $mu++;
            }
        ?>
    </div>
</body>
</html>
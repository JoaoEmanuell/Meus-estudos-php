<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 003</title>
    <style>
        span{
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <h1>Fatorial</h1>
    <p>Insira um numero para que o seu fatorial seja calculado</p>
    <form action="index.php" method="GET">
    <p><label for="num">Numero <input type="number" name="num" id="num" min="0" max="9999"></label></p>
    <input type="submit" value="Calcular">
    </form>
    <p>
        <?php
            function fatorial($n){
                if ($n < 0){
                    return "Ops, o numero informado é invalido";
                }
                else{
                $mul = $n;
                $fat = 1;
                while ($mul != 1){
                    $fat *= $mul;
                    $mul--;
                }
                return $fat;
                }
            }
            $num = isset($_GET['num']) ? $_GET['num'] : 0;
            if ($num < 0){
                echo "Ops, o numero informado é invalido!";
            }
            else if ($num >= 171){
                echo " O fatorial de $num é infinito, portanto não pode ser determinado!";
            }
            else{
                $res = fatorial($num);
                echo " O fatorial de $num é igual a $res";
            }
        ?>
    </p>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 004</title>
    <style>
        .left{
            padding-left: 10px;
        }
    </style>
</head>
<body>
    <form action="index.php" method="GET">
        <p><label for="n1">Primeiro Número: <input type="number" name="n1" id="n1"></label></p>
        <p>
            <label for="op">+<input type="radio" name="op" id="op" checked="checked" value="+"></label>
            <label for="op1" class="left">-
                <input type="radio" name="op" id="op1" value="-">
            </label>
        </p>
        <p>
            <label for="op2">*<input type="radio" name="op" id="op2" value="*"></label>
            <label for="op3" class="left">÷<input type="radio" name="op" id="op3" value="/"></label>
        </p>
        <p><label for="n2">Segundo Número: <input type="number" name="n2" id="n2"></label></p>
        <p><input type="submit" value="Calcular"></p>
    </form>
    <?php
        $n1 = isset($_GET['n1']) ? $_GET['n1'] : 0;
        $n2 = isset($_GET['n2']) ? $_GET['n2'] : 0;
        $op = isset($_GET['op']) ? $_GET['op'] : 0;
        switch ($op){
            case '+':
                $vl = $n1 + $n2;
                break;
            case '-':
                $vl = $n1 - $n2;
                break;
            case '*':
                $vl = $n1 * $n2;
                break;
            case '/':
                $vl = round($n1 / $n2);
                break;
        }
        echo "$n1 $op $n2 = $vl";
    ?>
</body>
</html>
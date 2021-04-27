<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis PHP</title>
    <style>
    </style>
</head>
<body>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $m = ($n1 + $n2) / 2;
        echo "<p>A soma vale ". ($n1 + $n2);
        echo "<br>A subtração vale ". ($n1 - $n2);
        echo "<br>A multiplicação vale ". ($n1 * $n2);
        echo "<br>A divisão vale ". ($n1 / $n2);
        echo "<br>O modulo vale ". ($n1 % $n2);
        echo "<br>A media vale $m";
        echo "<br>O valor absoluto de $n2 é ". abs($n2);
        echo "<br>O valor de $n1<sup>$n2</sup> é ". pow($n1, $n2);
        echo "<br>A raiz quadrada de $n1 é ". round(sqrt($n1));
        echo "<br>A parte inteira de $n2 é ". intval($n2);
        echo "<br>O valor de $n1 formatado em moeda é ". number_format($n1, 2, ',', '.');
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções str</title>
</head>
<body>
    <?php
    /*
        $produto = "Leite";
        $preco = 4.6;
        printf("O %s está custando R$ %.2f", $produto, $preco);
    */
    /*
        $x[0] = 5;
        $x[1] = 6;
        $x[2] = 9;
        $y = array(6,9,7,5,6);
        print_r($x);
        echo "<br>";
        var_dump($y);
        echo "<br>";
        var_export($y);
    */
        $txt = "O dia está lindo hj";
        $res = str_split($txt);
        print_r($res);
    ?>
</body>
</html>
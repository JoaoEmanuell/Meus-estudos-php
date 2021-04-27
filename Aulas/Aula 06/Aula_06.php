<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
</head>
<body>
    <?php 
    /*  
        #Aplicador de desconto
        $a = $_GET["a"];
        echo "O valor é R$". number_format($a, 2, ',', '.');
        $a -= ($a / 100) * 10;
        echo "<br>Aplicando 10% de desconto<br>";
        echo "O valor final sera de R$". number_format($a, 2, ',', '.');
    */
    /*
        #Ano atual e anterior
        $ano = $_GET["a"];//$ano recebe o valor de A, que esta na url
        echo "O ano atual é $ano <br>";#escreva 
        echo "O ano anterior é ". --$ano;#escreva
    */
    /*
        #Variáveis referenciadas
        $a = $_GET["a"];//$a recebe o valor de A, que esta na url
        $c = &$a;//$b esta ligada a variavel A
        echo "O valor de A é $a";#escreva
        echo "<br>O valor de B é $c";#escreva
        echo "<br>Acresentando 5 a $c o valor de $c será ". ($c += 5);#escreva
        echo "<br>O novo valor de A é $a";#escreva
        echo "<br>O novo valor de B é $c";#escreva
    */
        $a = "oi";
        $$a = 'Olá';
        echo "$a";
        echo "<br>$oi";
    ?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores relacionais</title>
</head>
<body>
    <?php
    /*
        #operador ternario basico
        $n1 = $_GET["a"];#n1 recebe o valor da URL "a"
        $n2 = $_GET["b"];#n2 recebe o valor da URL "b"
        $tipo = $_GET["op"];#tipo recebe o valor da URL "op"
        echo "Os valores passados foram $n1 e $n2 <br>";#escreva
        $r = ($tipo == 's')? $n1 + $n2 : $n1 * $n2;#Caso o tipo seja == s , $r = $n1 + $n2 senão $r = $n1 * $n2
        echo "O resultado será $r";#escreva
    */
    /*
        #Operador idêntico
        $a = 3;#vars
        $b = '3';#vars    
        $r = ($a === $b) ? "Sim" : "Não";#operador de idêntico verifica se as vars são iguais e do mesmo tipo
        echo "As variáveis $a e $b são identicas? $r";#escreva
    */
    /*
        #Media
        $n1 = $_GET["a"];#$n1 recebe o valor da URL "a"
        $n2 = $_GET["b"];#$n2 recebe o valor da URL "b"
        $m = ($n1 + $n2) / 2;#calcula a media
        $res = ($m >= 7) ? "Aprovado" : "Reprovado";#se a media for superior ou igual a 7 , Retorne aprovado, senão retorne Reprovado
        echo "<p>A primeira nota foi ". number_format($n1, 1, '.', '.').#escreva
        "<br>A segunda nota foi ". number_format($n2, 1, '.', '.').#escreva
        "<br>A média foi ". number_format($m, 1, '.', '.').#escreva
        "<br>Portanto o aluno está $res</p>";#escreva
    */
        #Voto
        $ano = $_GET["ano"];
        $idade = 2021 - $ano;
    /*  
        if ($idade > 10 and $idade < 20){
            echo "teste";
        }
        else if ($idade > 20) {
            echo "teste 2";
        }
        else {
            echo "teste 3";
        }
        #Eu tava experimentando if else mesmo sem saber, e descobri que é igual ao do JS, que é identico ao da C#
        #Eu to rindo de mais kakakakka
    */
        $res = ($idade >= 18 and $idade < 65) ? "é OBRIGATORIO" : "NÃO É OBRIGATORIO";
        echo "O voto  $res";
    ?>
</body>
</html>
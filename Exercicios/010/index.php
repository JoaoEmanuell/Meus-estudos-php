<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio-010</title>
</head>
<body>
    <p>Insira um número entre 1 e 12 para verificar qual é o seu mês correspondente.</p>
    <form action="index.php" method="GET">
        <p><label for="num">Número: <input type="number" name="num" id="num" min="1" max="12"></label></p>
        <p><input type="submit" value="Verificar"></p>
    </form>
    <?php
        include "mes.php";
        $mes = isset($_GET['num']) ? $_GET['num'] : 0;
        if (is_numeric($mes)){
            if ($mes < 1 or $mes > 12){
                echo "Mês invalido!";
            }else{
                Mês($mes);
            }
        }else{echo "Desculpe, mais caracteres diferentes de numeros não formam meses!";}
    ?>
</body>
</html>
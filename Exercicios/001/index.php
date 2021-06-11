<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 001</title>
</head>
<body>
    <h1>Verificador de numero</h1>
    <form action="index.php" method="GET">
        <p><label for="num">Número </label><input type="number" name="num" id="num"></p>
        <input type="submit" value="Enviar">
    </form>
    <p class="Resultado">
        <?php
            $num = isset($_GET['num']) ? $_GET['num'] : 0;
            if ($num < 0){
                echo "O numero digitado é negativo";
            } else if ($num > 0){
                echo "O numero digitado é positivo";
            } else{
                echo "O numero digitado é igual a zero";
            }

        ?>
    </p>
</body>
</html>
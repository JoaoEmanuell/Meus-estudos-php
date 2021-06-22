<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio-005</title>
</head>
<body>
    <p>Digite um número para verificar se ele é par ou impar</p>
    <form action="index.php" method="GET">
        <p><label for="num">Número <input type="number" name="num" id="num"></label></p>
        <input type="submit" value="Verificar">
    </form>
    <p>
        <?php
            $num = isset($_GET['num']) ? $_GET['num'] : 0;
            if ($num % 2 === 0){
                echo "O número $num é par";
            }
            else{
                echo "O número $num é impar";
            }
        ?>
    </p>
</body>
</html>
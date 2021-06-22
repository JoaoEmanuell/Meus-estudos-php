<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio-007</title>
</head>
<body>
    <p>Insira dois números, o progama ira verifica qual é o maio e qual é o menor ou se eles são iguais</p>
    <form action="index.php" method="GET">
        <p><label for="n1">Primeiro Número: <input type="number" name="n1" id="n1" class="n1"></label></p>
        <p><label for="n2">Segundo Número: <input type="number" name="n2" id="n2" class="n2"></label></p>
        <input type="submit" value="Verificar">
    </form>
    <p>
        <?php
            $n1 = isset($_GET['n1']) ? $_GET['n1'] : 0;
            $n2 = isset($_GET['n2']) ? $_GET['n2'] : 0;
            if ($n1 > $n2){
                echo "$n1 é superior a $n2";
            } else if ($n2 > $n1){
                echo "$n2 é superior a $n1";
            } else if ($n1 === $n2){
                echo "$n1 é igual a $n2";
            } else{
                echo "erro";
            }
        ?>
    </p>
</body>
</html>
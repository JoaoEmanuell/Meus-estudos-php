<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio-008</title>
</head>
<body>
    <p>Média Final, coloque as três notas do aluno e o progama ira calcular a sua média</p>
    <form action="index.php" method="GET">
        <p><label for="N1">Primeiro Número: <input type="number" name="N1" id="N1" class="N1" min="0" max="10"></label></p>
        <p><label for="N2">Segundo Número: <input type="number" name="N2" id="N2" class="N2" min="0" max="10"></label></p>
        <p><label for="N3">Terceiro Número: <input type="number" name="N3" id="N3" class="N3" min="0" max="10"></label></p>
        <input type="submit" value="Calcular">
    </form>

    <p>
        <?php
            $notas = [isset($_GET['N1']) ? $_GET['N1'] : 0, isset($_GET['N2']) ? $_GET['N2'] : 0, isset($_GET['N3']) ? $_GET['N3'] : 0];
            foreach ($notas as $n){
                if ($n < 0 or $n > 10){
                    $tot += 0;
                }else{
                    $tot += $n;
                }
            }
            $tot = $tot / 3;
            $med = round($tot);
            if ($med >= 6){
                echo "Aprovado, média $med.0";
            }else{
                echo "Reprovado, média $med.0";
            }
        ?>
    </p>
</body>
</html>
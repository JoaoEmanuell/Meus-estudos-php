<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura condicionai if</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        .apr{
            color: green;
            font-weight: bold;
        }
        .rec{
            color: blue;
            font-weight: bold;
        }
        .rep{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    /*
        $ano = isset($_POST["nasc"])? $_POST["nasc"] : 1900;
        $idade = date("Y") - $ano;

        if ($idade >= 16 and $idade < 18){

            $vota = "Voto opcional";
            $dirige = "não pode dirigir";
        }
        elseif ($idade >= 18 and $idade < 65) {

                $vota = "Pode votar";
                $dirige = "pode dirigir";
           
        }
        else{
            
            $vota = "Voto opcional";
            $dirige = "pode dirigir";

        }
        echo "
        <span>            
                <p>Você nasceu em $ano<br></p>
                <p>Você tem $idade anos de idade <br></p>
                <p>$vota e $dirige!</p>            
        </span>";
    */
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $m = ($n1 + $n2) / 2;
    $m = number_format($m, 1, '.', '.');

    if ($m >= 7.0){
        echo "<span>
            <p>A média do aluno foi $m <br></p>
            <p>Portanto o aluno esta <span class='apr'>aprovado!</span></p>
        </span>";
    }elseif ($m >= 5.0 and $m <= 6.9){
        echo "<span>
            <p>A média do aluno foi $m <br></p>
            <p>Portanto o aluno está em <span class='rec'>recuperação!</span></p>
        </span>";
    }else{
        echo "<span>
            <p>A média do aluno foi $m <br></p>
            <p>Portanto o aluno está <span class='rep'>REPROVADO!</span></p>
        </span>";
    }
    ?>
    <br>
    <a href="index.html">Voltar</a>
</body>
</html>
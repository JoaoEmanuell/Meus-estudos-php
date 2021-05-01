<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1em;
        }
        .nd{
            font-size: 1.2em;
            color: red;
            font-weight: 900;
        }
        .sd{
            font-size: 1.2em;
            color: blue;
            font-weight: 900;
        }
        .nt{
            font-size: 1.2em;
            color: green;
            font-weight: 900;
        }
        .co{
            font-size: 1.2em;
            color: orange;
            font-weight: 900;
        }
        .su{
            font-size: 1.2em;
            color: darkblue;
            font-weight: 900;
        }
    </style>
</head>
<body>
    <?php
        /*

        #exercicio basico switch simples

        $num = isset($_POST['num']) ? $_POST['num'] : 0;
        $op = $_POST['op'];
        if ($num == 0){
            echo "<span>Numero invalido, tente novamente</span>";
        }
        else{
            switch ($op) {
                case "Dobro":
                    echo "<span>O dobro de $num é ". ($num * 2). "</span>";
                    break;
                case "Cubo":
                    echo "<span>O cubo de $num é ". ($num * 3). "</span>";
                    break;
                case "Raiz":
                    echo "<span>A raiz quadrada de $num é ". number_format(sqrt($num), 2, '.', '.'). "</span>";
                    break;
                default:
                    echo "Numero invalido, tente novamente";
            }
        }
        */
        /*
        $dia = isset($_POST['dia']) ? $_POST['dia'] : 0;
        switch ($dia) {

            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "<span>
                        <p>
                            Vai para a escola
                        </p>
                    </span>";
                break;
            case 1:
            case 7:
                echo "<span>
                        <p>
                            Não vai para a escola
                        </p>
                    </span>";
                break;
            default:
                "Erro";
        }
        */
        $estado = isset($_POST['est']) ? $_POST['est'] : "Erro";
        switch ($estado){

            case "Nordeste":
                echo "<span>Sua região é a região <span class='nd'>$estado</span></span>";
                break;
            case "Sudeste":
                echo "<span>Sua região é a região <span class='sd'>$estado</span></span>";
                break;
            case "Norte":
                echo "<span>Sua região é a região <span class='nt'>$estado</span></span>";
                break;
            case "Sul":
                echo "<span>Sua região é a região <span class='su'>$estado</span></span>";
                break;
            case "Centro-Oeste":
                echo "<span>Sua região é a região <span class='co'>$estado</span></span>";
                break;
        }
    ?>    
    <br>
    <a href="index.html">Voltar</a>
</body>
</html>
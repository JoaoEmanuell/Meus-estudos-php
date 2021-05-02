<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <?php
        /*$n1 = isset($_POST['n1']) ? $_POST['n1'] : 0;
        $n2 = isset($_POST['n2']) ? $_POST['n2'] : 0;

        function soma($a, $b) {
            $s = $a + $b;
            return $s;
        }

        $res = soma($n1, $n2);
        echo "<div>
            <p>
                A soma entre $n1 e $n2 vale $res
            </p>
        </div>";
        */

        function soma(){
            $p = func_get_args(); // valores colocados nos paramentros
            $tot = func_num_args(); // numero de paramentros
            $soma = 0;
            for ($i = 0; $i < $tot; $i++){
                $soma = $soma + $p[$i];
            }
            return $soma;
        }
        
        echo 'A soma vale '. soma(10, 10, 10, 5, 15);
    ?>
    <div>
        <a href="index.html">Voltar</a>
    </div>
</body>
</html>
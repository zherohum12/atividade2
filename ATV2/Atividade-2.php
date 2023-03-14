<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part2</title>
</head>

<body>
    <?php
    $quant = isset($_GET['quant']) ? $_GET['quant'] : 0;
    $min = isset($_GET['min']) ? $_GET['min'] : 0;
    $max = isset($_GET['max']) ? $_GET['max'] : 0;

    $resultado = isset($_GET['resultado']) ? $_GET['resultado'] : "";
    ?>

    <?php
    echo "<h2>Quantidade de números gerados: $quant</h2>";
    echo "<h2>Mínimo: $min</h2>";
    echo "<h2>Máximo: $max</h2>";
    echo "<b>Vetor Gerado</b><br>";
    $array = array();
    for ($i = 0; $i < $quant; $i++) {
        $array[$i] = rand($min, $max);
        echo "$array[$i] | ";
    }
    if ($resultado == "ordem original") {
        echo "<br><br><b>Mostrar os elementos do vetor na ordem original (primeiro, segundo, ..., último);</b><br>";
        for ($i = 0; $i < $quant; $i++) {
            echo "$array[$i] | ";
        }
    } elseif ($resultado == "inverso") {
        echo "<br><br><b>Mostrar os elementos do vetor na ordem original (primeiro, segundo, ..., último);</b><br>";
        for ($i = $quant - 1; $i >= 0; $i--) {
            echo $array[$i] . " | ";
        }
    } elseif ($resultado == "maior elemento") {
        echo "<br><br><b>Maior elemento;</b><br>";
        echo max($array);
    } elseif ($resultado == "menor elemento") {
        echo "<br><br><b>Menor Elemento;</b><br>";
        echo min($array);
    } elseif ($resultado == "pares") {
        echo "<br><br><b>Elementos Pares;</b><br>";
        for ($i = 0; $i < $quant; $i++) {
            if ($array[$i] % 2 == 0) {
                echo "$array[$i] | ";
            }
        }
    } elseif ($resultado == "impares") {
        echo "<br><br><b>Elementos Ímpares;</b><br>";
        for ($i = 0; $i < $quant; $i++) {
            if ($array[$i] % 2 != 0) {
                echo "$array[$i] | ";
            }
        }
    } elseif ($resultado == "soma") {
        echo "<br><br><b>Soma dos elementos;</b><br>";
        $count = 0;
        for ($i = 0; $i < $quant; $i++) {
            $count = $count + $array[$i];
        }
        echo $count;
    } elseif ($resultado == "media") {
        echo "<br><br><b>Média dos elementos;</b><br>";
        $count = 0;
        for ($i = 0; $i < $quant; $i++) {
            $count = $count + $array[$i];
        }
        echo $count / $quant;
    } elseif ($resultado == "acima media") {
        echo "<br><br><b>Elementos acima da média;</b><br>";
        $count = 0;
        for ($i = 0; $i < $quant; $i++) {
            $count = $count + $array[$i];
        }
        $media = $count / $quant;
        for ($j = 0; $j < $quant; $j++) {
            if ($array[$j] >= $media) {
                echo "$array[$j] | ";
            }
        }
    } elseif ($resultado == "abaixo media") {
        echo "<br><br><b>Elementos abaixo da média;</b><br>";
        $count = 0;
        for ($i = 0; $i < $quant; $i++) {
            $count = $count + $array[$i];
        }
        $media = $count / $quant;
        for ($j = 0; $j < $quant; $j++) {
            if ($array[$j] <= $media) {
                echo "$array[$j] | ";
            }
        }
    } elseif ($resultado == "primos") {
        echo "<br><br><b>Elementos primos;</b><br>";
        function confere($n)
        {
            if ($n <= 1) {
                return false;
            }
            for ($i = 2; $i <= sqrt($n); $i++) {
                if ($n % $i == 0) {
                    return false;
                }
            }
            return true;
        }

        foreach ($array as $valores) {
            if (confere($valores)) {
                echo "$valores | ";
            }
        }
    }
    ?>

</body>

</html>
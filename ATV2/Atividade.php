<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Att</title>
</head>

<body>

    <form action="Atividade-2.php" method="get">
        <label for="nums.gerados">Quantidade de Números Gerados</label>
        <input type="text" name="quant" id="quant"><br> 

        <label for="Mínimo">Mínimo</label>
        <input type="text" name="min" id="min"><br>

        <label for="Maximo">Máximo</label>
        <input type="text" name="max" id="max"><br>

        <fieldset>
            <legend>Resultados</legend>

            <input type="radio" id="ordem original" name="resultado" value="ordem original">
            <label for="ordem original">Mostrar os elementos do vetor na ordem original (primeiro, segundo, ..., último);</label><br>

            <input type="radio" id="inverso" name="resultado" value="inverso">
            <label for="inverso">Mostrar os elementos do vetor na ordem original (primeiro, segundo, ..., último);</label><br>

            <input type="radio" id="maior elemento" name="resultado" value="maior elemento">
            <label for="maior elemento">Maior elemento;</label><br>

            <input type="radio" id="menor elemento" name="resultado" value="menor elemento">
            <label for="menor elemento">Menor Elemento;</label><br>

            <input type="radio" id="pares" name="resultado" value="pares">
            <label for="pares">Elementos Pares;</label><br>

            <input type="radio" id="impares" name="resultado" value="impares">
            <label for="impares">Elementos Ímpares;</label><br>

            <input type="radio" id="soma" name="resultado" value="soma">
            <label for="soma">Soma dos elementos;</label><br>

            <input type="radio" id="media" name="resultado" value="media">
            <label for="media">Média dos elementos;</label><br>

            <input type="radio" id="acima media" name="resultado" value="acima media">
            <label for="acima media">Elementos acima da média;</label><br>

            <input type="radio" id="abaixo da media" name="resultado" value="abaixo da media">
            <label for="abaixo da media">Elementos abaixo da média;</label><br>

            <input type="radio" id="primos" name="resultado" value="primos">
            <label for="primos">Elementos primos;</label><br>
        </fieldset>
        <input type="submit" value="Calcular">
    </form>

</body>

</html>
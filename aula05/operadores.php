<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operacoes Aritmeticas</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $m = ($n1 + $n2) / 2;
            echo "<h1>Valores recebidos: $n1 e $n2 </h1>";
            echo "A soma vale " . ($n1 + $n2);
            echo "<br/> A subtracao vale " . ($n1 - $n2);
            echo "<br/> A multiplicacao vale " . ($n1 * $n2); 
            echo "<br/> A divisao vale " . ($n1 / $n2); 
            echo "<br/> O modulo vale " . ($n1 % $n2); 
            echo "<br/> A media vale " . $m;
        ?>
    </div>
</body>
</html>
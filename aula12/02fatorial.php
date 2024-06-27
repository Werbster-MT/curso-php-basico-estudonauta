<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - Cursoemvideo.com</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $v = isset($_GET["val"])? $_GET["val"] : 1;
            echo "<h1>Calculando o Fatorial de $v</h1>";

            $fat = 1;
            $c = 1;
            do {    
                $fat *= $c;
                $c++; 
            }while($c <= $v);
            
            echo "<h2>$v! = $fat</h2>"
        ?>

        <a href="02index.html" id="voltar">Voltar</a>

    </div>
</body>
</html>
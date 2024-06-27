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
            echo "<h1>Mostrando a Tabuada de $v</h1>";
            $c = 1;
            do {
                $r = $v * $c;    
                echo "$v x $c = $r<br/>";
                $c++; 
            }while($c <= 10);
        ?>
        <br>
        <a href="02index.html" id="voltar">Voltar</a>

    </div>
</body>
</html>
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
    
            for ($c = 1; $c <= 10; $c++) {
                $r = $v * $c;    
                echo "$v x $c = $r<br/>";
            }
        ?>
        <br>
        <a href="02index.php" id="voltar">Voltar</a>

    </div>
</body>
</html>
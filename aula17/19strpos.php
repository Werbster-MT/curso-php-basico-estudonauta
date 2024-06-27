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
            $frase = "Estou aprendendo PHP";
            $pos = stripos($frase, "php");
            echo "$frase<br>A string foi encontrada na posição $pos";
        ?>
    </div>
</body>
</html>
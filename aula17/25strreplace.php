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
            $frase = "Gosto de estudar Matemática! Matemática é muito legal!";
            $novaFrase = str_ireplace("matemática","PHP", $frase);
            echo "$novaFrase ";
        ?>
    </div>
</body>
</html>
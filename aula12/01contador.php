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
             $c = 0;
             do {
                echo $c . "<br/>";
                $c += 2;
            }
             while($c <= 20);
        ?>
    </div>
</body>
</html>
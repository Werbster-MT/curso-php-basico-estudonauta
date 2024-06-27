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
            $ini = isset($_GET["ini"])? $_GET["ini"]: 1;
            $fim = isset($_GET["fim"])? $_GET["fim"]: 1;
            $pas = isset($_GET["pas"])? $_GET["pas"]: 1;

            if ($ini > $fim) {
                while($ini >= $fim) {
                    echo "$ini ";
                    $ini -= $pas;
                }
            }

            else {
                while($ini <= $fim) {
                    echo "$ini ";
                    $ini += $pas;
                }
            }
        ?>
    </div>
</body>
</html>
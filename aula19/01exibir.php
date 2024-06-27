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
        <pre>
            <?php
                $v = array("A", "J", "M", "X", "K");
                $tot = count($v);
                echo "O vetor tem $tot elementos<br/>";
                print_r($v);
                
            ?>
        </pre>
    </div>
</body>
</html>
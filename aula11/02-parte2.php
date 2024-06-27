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
            $i = 1;
            while ($i <= 5) {
                $v = "num".$i;
                $url = "v". $i;
                $$v = isset($_GET[$url])? $_GET[$url] : 0;
                $i++;
            }
            
            $c = 1;
            while($c <= 5) {
                $v = "num".$c;
                echo "Valor $c: " . $$v . "<br>";
                $c++;
            }
        ?>

        <br>
        <a id="voltar" href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>
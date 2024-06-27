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
            $n = isset($_GET["num"])? $_GET["num"]: 0;
            $op = isset($_GET["oper"])? $_GET["oper"]: 1;

            switch($op) {
                case 1:
                    $r = $n * 2;
                    break;
                
                case 2:
                    $r = $n ^ 3;
                    break;

                case 3:
                    $r = sqrt($n); // $n ^ 0.5
            }
            
            echo "O resultado da operação solicitada foi <span class= 'foco'>$r</span>";
        ?>
        <br>
        <a id="voltar" href="exercicio01.html">Voltar</a>
    </div>
</body>
</html>
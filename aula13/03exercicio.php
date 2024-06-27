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
            $n = isset($_GET["num"])? $_GET["num"] : 1;
            echo "<h1>Analisando o num $n</h1>";
            $mult = 0;
            $val = '';
            for ($i = 1; $i <= $n; $i++) {
                if (($n%$i) == 0) {
                    $val = $val . strval($n) . " ";
                    $mult++;
                }
            }
            $r = ($mult > 2)? "NÃO É PRIMO": "É PRIMO";
            echo "<h3>Valores múltiplos: $val<br/></h3>";
            echo "<h3>Total de Múltiplos: $mult<br/></h3>";
            echo "<h2>Resultado: $n <span class='foco'>$r</span></h2>"
        ?>
        <a href="03exercicio.html" id="voltar">Voltar</a>
    </div>
</body>
</html>
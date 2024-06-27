<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Curso de PHP - Cursoemvideo.com</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
           $ano = $_GET["an"];
           $idade = 2024 - $ano;
           echo "Quem nasceu em $ano tem idade de $idade anos.";
           $tipo = ($idade >= 18 && $idade< 65)? "Obrigatorio": "Opcional";
           echo "E dessa forma o seu voto é $tipo";
        ?>
    </div>
</body>
</html>
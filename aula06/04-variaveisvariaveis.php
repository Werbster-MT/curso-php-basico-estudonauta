<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $x = "abc";
            $$x = "def";
            echo "O conteúdo da variável x é $x";
            echo "<br/>A variavel ABC criada recebeu o valor $abc";
        ?>
    </div>
</body>
</html>
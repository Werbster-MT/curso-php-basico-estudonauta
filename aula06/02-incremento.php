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
            # Isso é um comentário
            /* Esse exercício pretende demonstrar 
            o uso de operadores de incremento e decremento */
            $atual = $_GET["aa"]; // Essa linha vai pegar o ano na URL
            echo "O ano atual é $atual e o ano anterio é " . --$atual;
        ?>
    </div>
</body>
</html>
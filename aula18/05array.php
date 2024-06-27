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
                $cad = array (
                    "nome" => "ana",
                    "idade" => 29,
                    "peso" => 69.5,
                );

                $cad["fuma"] = true;
                
                foreach($cad as $k => $c) {
                    echo "O campo $k possui o conteúdo $c <br/>";
                }
            ?>  
        </pre>
    </div>
</body>
</html>
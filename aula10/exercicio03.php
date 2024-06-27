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
            $est = isset($_GET["est"])? $_GET["est"]: "";

            switch($est) {
                case "AC":
                case "Ap":
                case "AM":
                case "PA":
                case "RO": 
                case "RR": 
                case "TO": 
                    echo "Você mora na <span class='foco'>Região Norte!</span> ";
                    break;
            
                case "AL": 
                case "BA": 
                case "CE": 
                case "MA": 
                case "PB": 
                case "PE": 
                case "PI": 
                case "RN": 
                case "SE": 
                    echo "Você mora na <span class='foco'>Região Nordeste!</span>";
                    break;
                
                case "DF": 
                case "GO": 
                case "MT": 
                case "MS":
                    echo "Você mora na <span class='foco'>Região Centro-Oeste!</span>";
                    break;
                
                case "ES": 
                case "MG": 
                case "RJ": 
                case "SP":
                    echo "Você mora na <span class='foco'>Região Sudeste!</span>";
                    break;
                
                case "ES": 
                case "MG": 
                case "RJ":
                    echo "Você mora na <span class='foco'>Região Sul!</span>";
                    break;

                default: 
                echo "Estado Inválido!";
            }
        ?>
        <br>
        <a id="voltar" href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>
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
            $n1 = isset($_GET["n1"])? $_GET["n1"]: 1;
            $n2 = isset($_GET["n2"])? $_GET["n2"]: 1;

             $m = ($n1 + $n2) / 2; 

            /* Médias
                0>=x<5 ->  reprovado
                5>=x<7 -> recuperação
                x>7 -> aprovado
            */

            echo "A média entre  <span class='foco'>$n1</span> e <span class='foco'>$n2</span> é igual a <span class='foco'>$m</span> <br/>";
            if ($m>= 0 && $m<5){
                $sit = "REPROVADO";
            }
            elseif ($m<7) {
                $sit = "RECUPERAÇÃO";
            }
            else {
                $sit = "APROVADO";
            }

             echo "Situação do aluno: <span class='foco'>$sit</span> <br/>" 
        ?>
        <a id="voltar" href="exercicio03.html">Voltar</a>
    </div>
</body>
</html>
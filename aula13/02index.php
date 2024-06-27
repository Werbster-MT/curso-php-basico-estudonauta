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
        <form  method="get" action="02tabuada.php">
            Número: 
            <select name="val">
                <?php
                    for ($i =1; $i <= 10; $i++) {
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>
            <input id="btn" type="submit" value="Tabuada">
        </form>

        <?php
           
        ?>
    </div>
</body>
</html>
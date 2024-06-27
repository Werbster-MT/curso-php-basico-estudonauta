<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - Cursoemvideo.com</title>
   <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <form  method="get" action="03tabuada.php">
            Número: 
            <select name="val">
                <?php
                    $c = 1;
                    while($c <= 10) {
                        echo "<option value='$c'>$c</option>";
                        $c++;
                    }
                ?>
            </select>
            <input id="btn" type="submit" value="Tabuada">
        </form>
    </div>
</body>
</html>
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
            $t = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, suscipit ducimus. Eligendi assumenda eum pariatur tempora qui laborum error modi, veniam non deserunt natus velit consectetur officia officiis molestias sint!";
            $r = wordwrap($t, 5, "<br>\n", false);
            echo $r;
        ?>
    </div>
</body>
</html>
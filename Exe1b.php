<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ex1 - Carros</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
        <h2>Sucesso</h2>
        <?php

        $tipo = $_POST['selTipo'];
        $cor = $_POST['txtCor'];

        print "Seu $tipo de cor $cor está pronto. Dirija com cuidado";
        ?>
</body>
</html>


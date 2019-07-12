<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funções para Strings</title>
</head>
<body>
    <form method="post" action="Exe5b.php">
        <label for="idtexto">Digite algum texto aqui:</label> <br>
        <textarea name="texto" id="idtexto" cols="30" rows="10"></textarea> <br>
        <input type="radio" name="funcString" id="idfuncString" value="strlen"><label for="funcString">Encontrar o tamanho do texto</label> <br>
        <input type="radio" name="funcString" id="idfuncString" value="strrev"><label for="idfuncString">Inverter o texto</label> <br> 
        <input type="radio" name="funcString" id="idfuncString" value="strtoupper"><label for="idfuncString">Mudar para todas as letras maiúsculas</label> <br>
        <input type="radio" name="funcString" id="idfuncString" value="strtolower"><label for="idfuncString">Mudar para todas as letras minúsculas</label> <br>
        <input type="radio" name="funcString" id="idfuncString" value="ucwords"><label for="idfuncString">Alterar a primeira letra de todas as palavras para maiúsculas</label> <br>
        <input type="submit" value="Manipular">
    </form>
</body>
</html>
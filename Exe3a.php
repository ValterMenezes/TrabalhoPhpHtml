<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Seletor de Vinho</title>
    
</head>
<body>

    <form method="post" action="Exe3b.php">
        Digite seu Nome: <input type="text" name="name" /> <br/>
        Selecione Seu Tipo de Vinho Favorito: <br/>
        <input id="branco" type="radio" name="vinho" value="Branco">
        <label for="branco">Branco</label>
        <input id="rose" type="radio" name="vinho" value="Rosé">
        <label for="rose">Rosé</label>
        <input id="tinto" type="radio" name="vinho" value="Tinto">
        <label for="tinto">Tinto</label><br/>
        Digite Sua Refeição Favorita: <input type="text" name="comida" /><br/><br/>

        <input type="submit" value="Submeter este formulário" />
    </form>
    
</body>
</html>

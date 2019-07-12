<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Seletor de Vinho</title>
    
</head>
<body>

    <?php
    $nome = $_POST['name'];
    $vinho = $_POST['vinho'];
    $refeicao = $_POST['comida'];
?>
    Obrigado pela sua seleção, <?php echo $nome ?><br/>
    __________________________________________ <br/>
    Você realmente aprecia <?php echo $refeicao ?><br/>
    especialmente com um vinho <?php echo $vinho ?>
    
    
</body>
</html>

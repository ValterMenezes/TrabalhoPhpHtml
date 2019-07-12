<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ex2 - RGB</title>
</head>
<body>
        <h2>Seletor de Cores</h2>
        <?php

        $corr = $_POST['txtR'];
        $corg = $_POST['txtG'];
        $corb = $_POST['txtB'];

        $rgb = $corr . ',' . $corg . ',' . $corb;
        
        ?>

        R: <?php print $corr; ?>
        G: <?php print $corg; ?>
        B: <?php print $corb; ?>

    <br /> <br />

    <div style="width: 150px; height: 150px; background-color: rgb(<?php echo $rgb; ?>)" /></div>


</body>
</html>


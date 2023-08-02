<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>Exemplo de php</H1>
    
    <?php
    date_default_timezone_set("America/Sao_Paulo");
    echo "Hoje e dia " . date("d/M/Y") ;
    echo "e a hora atual " . date("G:i:s") ;
    ?>
</body>
</html>
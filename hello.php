<?php 

    $pagraph = $_POST['pagraph'];
    $word = $_POST['word'];
    $new_pagraph = str_replace($word, "***", $pagraph);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h3>Paragrafo censurato:</h3>
        <p><?php echo $new_pagraph ?></p>
        <h4>Numero di lettere:</h4>
        <p><?php echo strlen($pagraph) ?></p>
    </body>
</html>

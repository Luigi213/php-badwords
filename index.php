<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
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
        <form action="./hello.php" method="POST">
            <textarea name="pagraph" id="pagraph" placeholder="Paragrafo da inserire"></textarea>
            <input type="text" name="word" id="word" placeholder="Parola da censurare">
            <button type="sumbit">Send</button>
        </form>
    </body>
</html>
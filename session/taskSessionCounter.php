<?php

function display(string $string)
{
    echo ('<p>' . $string . '</p>');
}

session_start();
$update = $_GET['clear'];
// var_dump($_GET['clear']);
if($update == 0){
    $_SESSION['count']++;
} else {
        $_SESSION['count'] = 1;
}



?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>taskSessionCounter</title>
    </head>
    <body>
        <?php display($_SESSION['count'] . '回目のアクセスです。'); ?>
        <button onclick="location.href='taskSessionCounter.php?clear=0'">
            更新
        </button>
        <button onclick="location.href='taskSessionCounter.php?clear=1'">
            クリア
        </button>
    </body>
</html>
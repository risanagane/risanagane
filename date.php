<?php

$apple = "5";
$doubleString = "string型を使用するときに、ダブルクオート(\")を表示する場合は、バックスラッシュ(\)が必要です。"; 
$singleString = 'I\'m Security Enginner';
$name = "太郎くん";

const GREETING_NIGHT = "こんばんは、";


?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskDataType</title>
</head>
<body>
    <p><?php echo(りんごが.$apple . 個あります ); ?></p>
    <p><?php echo($doubleString); ?></p>
    <p><?php echo($singleString); ?></p>
    <p><?php echo(GREETING_NIGHT.$name); ?></p>
</body>
<body>
</body>
</html>

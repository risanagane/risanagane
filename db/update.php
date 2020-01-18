<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskExternal</title>
</head>
<body>
<?php

// アジア→東アジア
echo $sql = "update country set area = \'東アジア\' where id = 1";
// 富士山－信仰の対象と芸術の源泉、文化
echo $sql = "update heritage set name = \'富士山－信仰の対象と芸術の源泉\', type = \'文化\' where id = 6";

?>

</body>
</html>
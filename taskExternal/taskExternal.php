<?php
/**
 * 表示を行う
 * 
 * @param  string $string
 * @return null
 */
function display(string $string)
{
    echo ('<p>' . $string . '</p>');
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>taskExternal</title>
</head>
<body>
display('回答を<p>タグで囲み、回答を出力してください。');
display('回答例: 1 + 1 = ' . (string)(1 + 1) . 'です。');
</body>
</html>
```
<?php 
// 課題１
$num1 = 84;
$num2 = 37;
$flag = true;
$flag2 = false;

require_once("externalFunctions.php"); 
    echo nl2br($num1 ."+". $num2 ."=".calcNumber($num1,$num2,$flag)."\n");
    echo nl2br($num1 ."-". $num2 ."=".calcNumber($num1,$num2,$flag2)."\n");
    echo nl2br($num1."の2乗は".pownumber($num1,$flag2)."\n");
    echo nl2br($num2."の3乗は".pownumber($num2,$flag)."\n");
    echo nl2br("A君の平均点は".$totalScore."です。" . "\n" );
?>
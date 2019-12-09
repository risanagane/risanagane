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
if(isset($_GET['color'])){
    setcookie('color',$_GET['color']);
} else {
    setcookie('color','black');


}
$text = '色を設定しました！';


?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>taskCookieSetColor</title>
    </head>
    <body>
        <?php display($text . "<br>"); ?>
        <button onclick="location.href='taskCookielmplement.php'">
            戻る
        </button>
    </body>
</html>
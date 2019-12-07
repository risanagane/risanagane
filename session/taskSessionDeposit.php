<?php
$sum = 0;
session_start();
$a = isset($_POST["save"]);
$b = isset($_POST["clear"]);
if ($a) {
    $num = $_POST["money"];
    if(empty($num)){
        $num = 0;
    }
    $_SESSION["money"] = $_SESSION["money"] + $num;
    $sum = $_SESSION["money"];
} else {
    session_destroy();
    $sum = 0;
}



?>
<!doctype html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>taskSessionDeposit</title>
    </head>
    <body>
        <form action="taskSessionDeposit.php" method="post">
            <div class="content">
                <div>現在の貯金額は、<span style="color:blue;"><?php echo $sum; ?>円</span>です。</div>
                <input type="text" name="money" class="money" />円
                <div class="btnArea">
                    <input type="submit" name="save" value="貯金" />
                    <input type="submit" name="clear" value="クリア" />
                </div>
            </div>
        </form>
    </body>
</html>
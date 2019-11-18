<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>金額を表示</title>
</head>
<body>

    合計（税引き）は、<?php echo $_GET['x']+$_GET['y'];?>円です。<br/>
    手数料込の合計（税抜き）は、<?php echo $_GET['x']+$_GET['y']+100;?>円です。<br/>
    総計（税込み）は、<?php echo($_GET['x']+$_GET['y']+100)*1.08;?>円です。<br/>
</body>
</html>
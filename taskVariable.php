<?php

$applePrice = 110;
$orengePrice = 80;

$applebuy = 15;
$orengebuy = 12;
$total = $applebuy + $orengebuy ;

$appletotal = $applePrice * $applebuy ;
$orengetotal = $orengePrice * $orengebuy ;


$totalExclu = $appletotal +  $orengetotal ;
$totalInclude = $totalExclu * 1.1 ;

$average = $totalExclu / $total ;

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskVariable</title>
</head>
<body>
    <p><?php echo('回答を<p>タグで囲み、回答を出力してください。'); ?></p>
    <p><?php echo('回答例: 1 + 1 = ' . (1 + 1) . 'です。'); ?></p>

 
 <p><?php echo('りんごの総額（税抜）は何円ですか？　'. $appletotal . '円') ;?></p>
 <p><?php echo('オレンジの総額（税抜）は何円ですか？　'. $orengetotal . '円') ;?></p>

 <p><?php echo('総額（税抜）は何円ですか？ ' . $totalExclu. '円'); ?></p>
 <p><?php echo('総額（税込）は何円ですか？　' . $totalInclude . '円') ;?></p>
 <p><?php echo('フルーツの1個のあたり' . round( $average . 1) . '円' ) ; ?></p> 

</body>
<body>
</body>
</html>
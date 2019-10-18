<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskCalc</title>
</head>
<body>
    <p><?php echo('回答を<p>タグで囲み、回答を出力してください。'); ?></p>
    <p><?php echo('回答例: 1 + 1 = ' . (1 + 1) . 'です。'); ?></p>
 

 <p><?php echo('( 1 + 3) * 5 = '. (1 + 3) * 5); ?></p>

 <p><?php echo('22 ÷ 3 (小数点第3位を四捨五入)= ' . round( 22 / 3 , 3) ); ?></p>

 <p><?php echo('22 ÷ 3 (小数点以下を切り上げ)= ' . ceil( 22 / 3 ) ); ?></p>
 
 <p><?php echo('22 ÷ 3 (小数点以下を切り下げ)= ' . floor ( 22 / 3 )); ?></p>

 <p><?php echo('サイコロを2つ降ったときに、総計が8となる確率は？？= '. round(5/36*100,2) .'%'); ?></p>






<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskCalc</title>
</head>
<body>
    <p><?php echo('回答を<p>タグで囲み、回答を出力してください。'); ?></p>
    <p><?php echo('回答例: 1 + 1 = ' . (1 + 1) . 'です。'); ?></p>

    <p><?php echo(' ( 1 + 3 ) * 5 = ' . ( 1 + 3 ) *5); ?></p>
    <p><?php echo(' ( 22 / 3 )   = ' . round ( 22 / 3 , 2 ) ); ?></p>
    <p><?php echo(' ( 22 / 3 )   = ' . ceil ( 22 / 3  ) ); ?></p>
    <p><?php echo(' ( 22 / 3 )   = ' . floor ( 22 / 3  ) ); ?></p>
    <p><?php echo( round ( 5 / 36 *100 , 2 ) .'%' ); ?></p>


    </body>
</html>
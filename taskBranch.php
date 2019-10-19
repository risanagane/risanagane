<?php

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskBranch</title>
</head>
<body>
<?php 
    // 比較演算子「==」で数値型「100」と比較し、条件が正しい場合「$string100は100です。」、正しくない場合は「$string100は100ではありません。」と出力してください。
    $string100 = 100;
    if($string100 == 100){
        echo("string100は100です。<br>");
    } else {
        echo("string100は100ではありません。<br>"); 
    }    
 
    // 比較演算子「===」で数値型「100」と比較し、条件が正しい場合「$string100は数字の100です。」、正しくない場合は「$string100は数字の100ではありません。」と出力してください。
    $string100 = '100';
    $bool = $string100 === 100;
    if($string100 === 100 ){
        echo("string100は100です。<br>");
    } else {
        echo("string100は100数字の100ではありません。<br>"); 
    }

    // 比較演算子「>」で数値型「100」と比較し、条件が正しい場合「$string100は101以上です。」、正しくない場合は「$string100は101以上ではありません。」と出力してください。
    $string100 = '100';
    if($string100 > 100 ){
            echo("string100は101以上です。<br>");
    } else {
        echo("string100は101以上ではありません。<br>");
    }
    // 比較演算子「>=」で数値型「100」と比較し、条件が正しい場合「$string100は100以上です。」、正しくない場合は「$string100は100以上ではありません。」と出力してください。
    $string100 = '100';
    if($string100 >= 100){
    echo("string100は100以上です。<br>");
    } else {
        echo("string100は100以上ではありません。<br>");
    }
   
    // Aくんの平均点を計算して、「Aくんの平均点は○○点です。」出力
    $average = 67.3;

    $kokugo = rand(1, 100);
    $suugaku = rand(1, 100);
    $rika = rand(1, 100);
    $shakai = rand(1, 100);
    $eigo = rand(1, 100);
    $A_average =  ($kokugo + $suugaku + $rika + $shakai + $eigo)/5;
    echo("A君の平均点は" . $A_average . "点です。<br>");

    //  Aくんの平均点と全体の平均点を比較し、平均点以上の場合は「Aくんの平均点は67.3以上です。」、平均点未満の場合は「Aくんの平均点は67.3未満です。」出力
    if($average <= $A_average ){
        echo("Aくんの平均点は67.3以上です。<br>");
    } else {
        echo("Aくんの平均点は67.3未満です。<br>");
    }

    // 下記のswitch文に$caseを通したときに何と表示されるかを、出力してください。
    $case = '1';
    switch ($case) {
        case true:
            echo 'bool';
            break;

        case 1:
            echo 'int';
            break;

        case '1':
            echo 'string';
            break;

        default:
            echo 'other';
    }
    echo("<br>");

    // 下記のswitch文に$caseを通したときに何と表示されるかを、出力してください。
    switch ($case) {
        case $case === true:
            echo 'bool';
            break;

        case $case === 1:
            echo 'int';
            break;

        case $case === '1':
            echo 'string';
            break;

        default:
            echo 'other';
    }
?>

</body>
<body>
</body>
</html>
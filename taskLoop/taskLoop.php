<?php
$fruitsTranslate = [
    'apple' => [
        'english' => "apple",
        'japanese' => "りんご",
        'price' => 80,
    ],
    'orange' => [
        'english' => "orange",
        'japanese' => "オレンジ",
        'price' => 120,
    ],
    'grape' => [
        'english' => "grape",
        'japanese' => "ぶどう",
        'price' => 220,
    ],
];

$tensu =[
    "A" => [
        "kokugo" => 34,
        "sansu" => 67,
        "shakai" => 45,
        "rika" => 34,
        "eigo" => 89,
    ],
    "B" => [
        "kokugo" => 76,
        "sansu" => 72,
        "shakai" => 65,
        "rika" => 77,
        "eigo" => 80,
    ],
    "C" => [
        "kokugo" => 98,
        "sansu" => 87,
        "shakai" => 88,
        "rika" => 92,
        "eigo" => 96,
    ],
    "D" => [
        "kokugo" => 65,
        "sansu" => 34,
        "shakai" => 71,
        "rika" => 56,
        "eigo" => 76,
    ],
    "E" => [
        "kokugo" => 67,
        "sansu" => 55,
        "shakai" => 71,
        "rika" => 56,
        "eigo" => 76,
    ],
    "F" => [
        "kokugo" => 81,
        "sansu" => 79,
        "shakai" => 74,
        "rika" => 82,
        "eigo" => 85,
    ],
];

$table = array(
    array("A" , "B" , "C" , "D" , "E" , "F"),
    array("kokugo" , "sansu" , "shakai" , "rika" , "eigo")
);

// $tensu['F']['kokugo']
foreach($tensu as $name => $row){
    $total = 0;
    foreach($row as $cel){
        $total += $cel;
    } 
    echo($total /5 . "<br>");
}

$totalSubject = [
    "kokugo" => 0,
    "sansu" => 0,
    "shakai" => 0,
    "rika" => 0,
    "eigo" => 0,
];
// $totalAverage = 68 + 64 + 67 + 64 + 81;
$totalAverage = 0;


// foreach($tensu as $name => $row){
//     foreach($row as $subject  => $cel){
//         $totalSubject[$subject] += $cel;
//     } 
// }

// var_dump($totalSubject);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskLoop</title>
</head>
<body>
<?php
// 課題１
foreach($fruitsTranslate as $key => $value){
    echo('英語では' . $key .'と表示され、日本語では' . $value['japanese'] . '、価格は、' . $value['price'].'円です。<br>');
}
?>

<table border=1>
    <tr>
        <th>名前</th>
        <th>国語</th>
        <th>数学</th>
        <th>社会</th>
        <th>理科</th>
        <th>英語</th>
        <th>平均</th>
    </tr>
    <?php foreach($tensu as $name => $row){ ?>
        <?php $total = 0; ?>
    <tr>
        <td><?= $name?></td>
        <?php foreach($row as $subject =>$cel){ ?>
            <?php $total += $cel; ?>
            <td><?= $cel?></td>
            <?php $totalSubject[$subject] += $cel; ?>
        <?php } ?>
        <td><?php echo($total /5); ?></td>
    </tr>
    <?php } ?>
    <tr>
        <td>平均</td>
        <?php foreach($totalSubject as $key => $value){ ?>
            <td><?php echo(round($value / 6.2)); ?></td>
        <?php $totalAverage += $value / 6;?>
        <?php } ?>
        <td><?php echo(round($totalAverage / 5.2));?>
    
    </tr>
</table>

</body>
</html>

<?php
    // 多次元配列で定義
    $tensu = [
        "Akun" => [
            "kokugo" => 85,
            "suugaku" => 64,
            "shakai" => 45,
            "rika" => 77,
            "eigo" => 80,
        ],

        "Bkun" => [
            "kokugo" => 56,
            "suugaku" => 89,
            "shakai" => 73,
            "rika" => 85,
            "eigo" =>78,
        ],

        "Ckun" => [
            "kokugo" => 98,
            "suugaku" => 87,
            "shakai" => 88,
            "rika" => 92,
            "eigo" => 96,
        ],
    ];

    $Bkun =[
        "kokugo" => 56,
        "suugaku" => 89,
        "shakai" => 73,
        "rika" => 85,
        "eigo" =>78
    ];

    $Akuntensu = [
        "kokugo" => 85,
        "suugaku" => 64,
        "shakai" => 45,
        "rika" => 77,
        "eigo" => 80
    ];
$AAverage = ($Akuntensu["kokugo"]+$Akuntensu["suugaku"]+$Akuntensu["shakai"]+$Akuntensu["rika"]+$Akuntensu["eigo"]) / 5;
$CkunAverage = $tensu["Ckun"]["kokugo"]+["Ckun"]["suugaku"]+["Ckun"]["shakai"]+["Ckun"]["rika"]+["Ckun"]["eigo"] / 5;
$BkunAverage = $tensu["Bkun"]["kokugo"]+["Bkun"]["suugaku"]+["Bkun"]["shakai"]+["Bkun"]["rika"]+["Bkun"]["eigo"] / 5;
$AkunAverage = $tensu["Akun"]["kokugo"]+["Akun"]["suugaku"]+["Akun"]["shakai"]+["Akun"]["rika"]+["Akun"]["eigo"] / 5;
$Average = ($AkunAverage + $BkunAverage + $CkunAverage) / 3 ;

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
// $Akunrika = $tensu["Akun"]["rika"];
echo("A君の理科の点数は:" . $tensu["Akun"]["rika"]."点です。<br>");
//  B君の英語の点数
echo("B君の英語の点数は:" . $Bkun["eigo"]."点です。<br>");
// A君の平均点数
echo("A君の平均点数は:" . $AAverage . "点です。<br>");
// C君の平均点数　多次元
echo("C君の平均点数は:" . $CkunAverage ."点です。<br>");
// 3人の平均点数　多次元
echo("3人の平均点数は:" . $Average. "点です。<br>");
?>

</body>
<body>
</body>
</html>
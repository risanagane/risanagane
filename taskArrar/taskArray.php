<?php
$japanAverageSalrryArray = [
    2018 => 4410000,
    2017 => 4320000,
    2016 => 4220000,
    2015 => 4200000,
    2014 => 4150000
];

$Average = ($japanAverageSalrryArray[2018]+$japanAverageSalrryArray[2017]+$japanAverageSalrryArray[2016]+$japanAverageSalrryArray[2015]+$japanAverageSalrryArray[2014]) / 5;

$tensuu =[
    A => 80,
    B => 55,
    C => 61,
    D => 76,
    E => 34,
    F => 93
];

$tensuu_Average = ($tensuu[A]+$tensuu[B]+$tensuu[C]+$tensuu[D]+$tensuu[E]+$tensuu[F] ) /6;

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskArray</title>
</head>
<body>

<?php
//var_dump表示
    echo("<pre>");
    var_dump($japanAverageSalrryArray);
    echo("</pre>");
//各年の平均年収    
    echo($Average);

//var_dump表示
    echo("<pre>");
    var_dump($tensuu);
    echo("</pre>");
    
//A～Fのテストの平均    
    echo($tensuu_Average);
?>
</body>
</html>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskFunc</title>
</head>
<body>

<?php 
    function display(string ...$strings)  
    {
        for($i = 0; $i < count($strings); $i++){
            echo $strings[$i];
        }
        
    }
        $string1 = "関数で文字列を表示!<br>";
        $string2 = "254 × 322=". (254 * 322);
    display($string1,$string2);

    function createRandomNunmeberArray()
    {   
        for ($i = 0 ; $i < 10 ; $i++){
            $createRandomNunmeberArray[] = rand(1,100);
        }

        echo("<pre>");
        var_dump($createRandomNunmeberArray);
        echo("</pre>");
    }
    createRandomNunmeberArray();

    function createRandomNunmeberArrayAndDisplay()
    {
        for ($i = 0 ; $i < 10 ; $i++){
            $createRandomNunmeberArray[] = rand(1,100);
        }
        
        for($i = 0 ; $i < 10 ; $i++){
            $dispArray[] = ($i+1)."番目の数値:" . $createRandomNunmeberArray[$i] . "<br>";
        }
        
        display(...$dispArray);
        return $createRandomNunmeberArray;

    }
    createRandomNunmeberArrayAndDisplay();

    $data = [
        47,
        31,
        86,
        16,
        39,
        53,
        94,
        3,
        74,
        28,
    ];

    function numberArrayCalcAndDisplay(array $numberArray) :int
    {  

        $total = 0;
        $formula = "";
        foreach ($numberArray as $key => $value) {
            if ($key === 0) {
                $total = $value;
                $formula .= $value;
                continue;
            }
            if ($value < 80 ) {
                $total += $value;
                $formula .= " + " . $value;
            } else {
                $total -= $value;
                $formula .= " - " . $value;
            }
        }
        display("計算式は " . $formula);
        return $total;
    }
    $num = numberArrayCalcAndDisplay($data);
    echo "<br>合計：".$num;
?>


</body>
</html>
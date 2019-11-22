<?php
require_once("externalFunctions.php");
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
$number = 84;
$calcNumber = 37;

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskExternal</title>
</head>
<body>
    <p>
        <?php echo("$number + $calcNumber = ". calcNumber($number,$calcNumber));?>
        <?php echo("$number - $calcNumber = ". calcNumber($number,$calcNumber,false));?>
        <?php echo("$number の2乗は". powNumber($number));?>
        <?php echo("$number の3乗は". powNumber($calcNumber , true));?>
        <?php echo("全科目の平均点は". calcAverage($averageScore) . "点です。");?>
        <?php echo("A君の平均点は". calcAverage($AScore) . "点です。");?>
        <?php 
            foreach (differenceScore($AScore, $averageScore) as $key => $value) {
            if ($value > 0) {
                display($subjectTitle[$key] . "は、平均点より" . abs($value) . "点高いです。");
            } elseif ($value < 0) {
                display($subjectTitle[$key] . "は、平均点より" . abs($value) . "点低いです。");
            } else {
                display($subjectTitle[$key] . "は、平均点と同じです。" );
            }
            }
        ?>
        </p>
</body>
</html>
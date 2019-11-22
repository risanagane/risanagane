<?php
function calcNumber(int $number , int $calcNumber , bool $calc = true) : int 
{
    if($calc){
        return $number + $calcNumber;
    } else {
        return $number - $calcNumber;
    }
}

function powNumber(int $number ,bool $calc = false):int
{
    if($calc){
        return $number * $number * $number;
    } else {
        return $number * $number;
    }

};

// 各科目の平均点
$averageScore = [
    
    'nationalLanguage' => 63,
    'math' => 67,
    'society' => 71,
    'science' => 68,
    'english' => 66
];
// 各科目名
$subjectTitle = [
    'nationalLanguage' => '国語',
    'math' => '数学',
    'society' => '社会',
    'science' => '理科',
    'english' => '英語',
];
// Aくんの点数
$AScore = [
    'nationalLanguage' => 76,
    'math' => 72,
    'society' => 65,
    'science' => 68,
    'english' => 80,
];

function calcAverage(array $score):float 
{
    $totalScore = 0;
    foreach($score as $value){
        $totalScore += $value;
    }
    return round($totalScore / count($score));
}

//点数を
function differenceScore(array $score, array $averageScore):array
{
    $differenceArray = [];
    foreach ($score as $key => $value) {
        $differenceArray[$key] = $value - $averageScore[$key];
    }
    return $differenceArray;
}
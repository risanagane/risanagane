<?php
function calcNumber(int $number, int $calcnumber,bool $calc):int {
    if($calc){
        return  $number + $calcnumber;
    } else {
        return $number - $calcnumber;
    }
}
function pownumber(int $number,bool $calc):int {
    if($calc){
        return  $number * $number * $number;
    } else {
        return $number * $number;
    }
}
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

function calcAverage(array $Score):float
{
    $totalScore = 0;
    foreach($Score as $value){
        $totalScore += $value;
    }
    return round($totalScore / count($Score));

}

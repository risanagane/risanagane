<?php
    $colors = [
        "magenta" => [
            "red" => 255,
            "green" => 0,
            "blue" =>255,
        ],
        "blacl" => [
            "red" => 0,
            "green" => 0,
            "blue" => 0,
        ],
    ];
    echo("<pre>");
    var_dump($colors);
    echo("</pre>");
    $oncolorElement = $colors["magenta"]["blue"];
    echo("要素一つだけ表示:" . $oncolorElement);
?>
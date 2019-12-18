<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskExternal</title>
</head>
<body>
<?php
//課題１ ヨーロッパの国
echo $sql = "select * from country where area = \'ヨーロッパ\'";
// ヨーロッパ以外
echo $sql = "select * from country where area not like \'%ヨーロッパ\'";
// 英語国
echo $sql = "select * from country where lang = \'英語\'";
// ヨーロッパかつ英語
echo $sql = "select * from country where area = \'ヨーロッパ\' and lang = \'英語\'";
// ヨーロッパかつ国番号40より小さい
echo $sql = "select * from country where area = \'ヨーロッパ\' and number < 40";

// 課題２　1．国名が「イ」
echo $sql = "SELECT * FROM country where name like \'イ%\'";
//2． 国名が「ス」で終わる
echo　$sql = "SELECT * FROM country where name like \'%ス\'";
//3．
echo　$sql = "SELECT * FROM heritage where country_id in(\'1\',\'3\')";
// 4．
echo $sql = "SELECT * FROM `heritage` WHERE country_id not in (\'1\',\'3\')";
// 5．
echo $sql = "SELECT * FROM `heritage` where type = \'文化\' order by country_id asc";
// 6．
echo $sql = "select * from  heritage order by country_id asc, id desc";
?>

</body>
</html>
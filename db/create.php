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
// country
echo $sql = "ALTER TABLE `country` ADD FULLTEXT( `id`, `name`, `area`, `lang`, `number`)";

// heritage
echo $sql = "ALTER TABLE `heritage` ADD FULLTEXT( `id`, `neme`, `country_id`, `type`)";

?>
</body>
</html>
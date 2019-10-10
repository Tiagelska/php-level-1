<?php
$today = getdate();
$year = date('Y');
//date();
$day = $today['mday'];
$month = $today['month'];
const TITLE = 'Мой сайт';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=TITLE?></title>
</head>
<body>
<h1><?=$year?> год</h1>
Текущая дата: <strong><?php echo $day?></strong>  месяц: <?=$month?> 
</body>
</html>
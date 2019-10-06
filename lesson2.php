<?php
//задание 1

$a = -5; //а и б два целых числа
$b = 6;
echo 'Задание 1. Числа а = '. $a .' и b = '. $b . '. Результат: ';
if(($a>=0)&&($b>=0)){
    echo $a-$b .PHP_EOL;
}
elseif(($a<0)&&($b<0)){
    echo $a*$b .PHP_EOL;
}
else echo $a + $b .PHP_EOL;

//задание 2

$a = 12; //число от 0 до 15
echo 'Задание 2. Число а = ' . $a . '. Числа от а до 15: ';
switch($a){ // вывести числа от а до 15
    case 0:
    echo $a .', ';
    $a++;
    case 1:
    echo $a .', ';
    $a++;
    case 2:
    echo $a .', ';
    $a++;
    case 3:
    echo $a .', ';
    $a++;
    case 4:
    echo $a .', ';
    $a++;
    case 5:
    echo $a .', ';
    $a++;
    case 6:
    echo $a .', ';
    $a++;
    case 7:
    echo $a .', ';
    $a++;
    case 8:
    echo $a .', ';
    $a++;
    case 9:
    echo $a .', ';
    $a++;
    case 10:
    echo $a .', ';
    $a++;
    case 11:
    echo $a .', ';
    $a++;
    case 12:
    echo $a .', ';
    $a++;
    case 13:
    echo $a .', ';
    $a++;
    case 14:
    echo $a .', ';
    $a++;
    case 15:
    echo $a .'. '.PHP_EOL;
    $a++;
}

//Задание 3.

function summa ($a, $b) {
    return $a+$b;
}
function raznost ($a, $b){
    return $a-$b;
}
function proizvedenie ($a, $b){
    return $a*$b;
}
function chastnoe($a, $b){
    return $a/$b;
}

//Задание 4

function mathOperation($arg1, $arg2, str $operation)
{
    switch($operation){
    case 'summa':
        return summa($arg1, $arg2);
    case 'raznost':
        return raznost($arg1, $arg2);
    case 'proizvedenie':
        return proizvedeinie($arg1, $arg2);
    case 'chastnoe':
        return chastnoe($arg1, $arg2);
    default:
        echo 'Нет такой функции';
        return NAN;
    }
}

//Задание 6

function power($val, $pow)
{
    function dopFunc($val, $pow, $dop)
    {
        if ($pow>1) {
            return dopFunc($val, $pow-1, $dop*$val);
        }
        return $dop*$val;
    }
    return dopFunc($val, $pow, 1);
}
$val = 3;
$pow = 3;
echo 'Задание 6. Результат '.$val.' в степени '.$pow. ' = ' .power($val, $pow).PHP_EOL;
?>
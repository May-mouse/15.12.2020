<!DOCTYPE HTML>
<html>
<head>
    <title>урок 10</title>
</head>
<body>
<h2>Ветвление кода. elseif. switch.</h2>
<h2>. Создайте переменную $a, в которую при каждом запуске
    скрипта будет устанавливаться значение от 1 до 20.
    Для этого воспользуйтесь функцией rand.
    Используя конструкцию switch добейтесь вывода на
    экран чисел от полученного в $a до 20</h2>
<h2>Вариант с switch</h2>
<?php
$a=rand(0,20);
switch ($a) {
    case 0: echo "0 <br>";
    case 1: echo "1 <br>";
    case 2: echo "2 <br>";
    case 3: echo "3 <br>";
    case 4: echo "4 <br>";
    case 5: echo "5 <br>";
    case 6: echo "6 <br>";
    case 7: echo "7 <br>";
    case 8: echo "8 <br>";
    case 9: echo "9 <br>";
    case 10: echo "10 <br>";
    case 11: echo "11 <br>";
    case 12: echo "12 <br>";
    case 13: echo "13 <br>";
    case 14: echo "14 <br>";
    case 15: echo "15 <br>";
    case 16: echo "16 <br>";
    case 17: echo "17 <br>";
    case 18: echo "18 <br>";
    case 19: echo "19 <br>";
    case 20: echo "20 <br>";
}
?>
<h2>Вариант с while</h2>
<?php
// $a=rand(0,20);

while ($a<=20) {
    echo($a . "<br>");
    $a++;
}
?>


<!DOCTYPE html>
<html>
<head><title>урок 11</title>
</head>
<body>
<h1>Функции. Начало.</h1>
<p>Задача 2. Создайте функцию getResult,
    которая будет принимать 3 значения:
    2 переменные над которыми будет
    производиться математическое действие
    и название самого действия, что должно быть произведено.</p>
<?php
function getResult($a1, $a2, $operation){
    if ($operation == 'sum') {
        $oper = ($a1 + $a2);
        echo "сумма чисел  $a1 и $a2   равна  $oper" ;
    }
    if ($operation == 'sub') {
        $oper = ($a1 - $a2);
        echo "разница чисел  $a1 и $a2   равна  $oper" ;
    }
    if ($operation == 'div') {
        $oper = ($a1 / $a2);
        echo "частное чисел  $a1 и $a2   равно  $oper" ;
    }
    if ($operation == 'mult') {
        $oper = ($a1 * $a2);
        echo "произведение чисел  $a1 и $a2   равно  $oper" ;
    }

    if ($operation == 'expo') {
        $oper = ($a1 ** $a2);
        echo "число  $a1 в степени $a2  равно  $oper" ;
    }
}
$result = getResult (150,9, 'mult');

?>
</body>
</html>

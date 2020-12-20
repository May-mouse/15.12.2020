<!DOCTYPE html>
<html>
<head><title>урок 11</title>
</head>
<body>
<h1>Функции. Начало.</h1>
<p>Создайте функцию getResult,
    которая будет принимать 3 значения:
    2 переменные над которыми будет
    производиться математическое действие
    и название самого действия, что должно быть произведено.</p>
</body>
</html>
<?php
// *** первый вариант
//function getreult ($oper1=2,$oper2=5)
//{
 //  $sum= $oper1+$oper2;
 //return $sum;
//}
//echo getreult()."<br>";//Выведет 7


// *** второй вариант

//function getreult ($op1=20,$op2=50)
//{
//    $pr= $op1*$op2;
//    return $pr;
//}
//echo getreult()."<br>";//Выведет 1000
//echo getreult(35,2)."<br>";//Выведет 70
//


// *** третий вариант


function getreult ($op1=2,$op2=10,$sum='сумма')
{
    $sum = $op1+$op2;
    return   $sum ;
}
echo getreult()."<br>";//Выведет1024

?>


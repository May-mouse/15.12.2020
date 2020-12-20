<!DOCTYPE html>
<html>
<head><title>урок 11</title>
</head>
<body>
<h1>Функции. Начало.</h1>
<p>Создайте функцию, которая будет принимать
    параметры: имя, адрес проживания, адрес регистрации, возраст, пол человека.
    Результатом работы данной функции должен
    быть вывод информации.</p>
</body>
</html>
<?php

nam1('Maya Mause','имя- ');
adr_fiz('Moskov, alleya Vitte,6 building 1, 10','адрес проживания- ');
adr_pasp('Gunara Astras str., bld 9, Riga, Latvia','адрес регистрации- ');
old('59 лет','старушке- ');
gender('женский','пол- ');

function nam1 ($name,$nam1)
{
    echo "{$nam1} {$name}<br>";
}
function adr_fiz ($adr,$adres)
{
    echo "{$adres} {$adr}<br>";
}
function adr_pasp ($adrreg,$adresreg)
{
    echo "{$adresreg} {$adrreg}<br>";
}
function old ($st,$star)
{
    echo "{$star} {$st}<br>";
}
function gender ($gend1,$gend2)
{
    echo "{$gend2} {$gend1}<br>";
}
?>

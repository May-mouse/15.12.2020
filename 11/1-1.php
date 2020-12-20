<!DOCTYPE html>
<html>
<head><title>урок 11</title>
</head>
<body>
<h1>Функции. Начало.</h1>
<p>Создайте функцию, которая будет принимать
    параметры: имя, адрес проживания, адрес регистрации, возраст, пол человека.
    Результатом работы данной функции должен
    быть вывод информации.Добавьте в функцию из файла 1.php правильный
    вывод возраста человека. Пример: 2года, 10 лет, 31год.</p>
</body>
</html>
<?php
nam1('Maya Mause','имя- ');

adr_fiz('Moskov, alleya Vitte,6 building 1, 10','адрес проживания- ');
adr_pasp('Gunara Astras str., bld 9, Riga, Latvia','адрес регистрации- ');
$st=75; //Сколько лет человеку- руками от 1 до 199
if ($st<=9) {
    $st1=$st;
}
else
    if  ($st>=100) {
        $st1=$st % 10;
    }
    else
    {$st1=$st%10;}
if (($st1==0)||($st1==5)||($st1==6)||($st1==7)||($st1==8)||($st1==9)){
    $mod=' лет';
}
if ($st1==1) {
    $mod=' год';
}
if (($st1==2) || ($st1==3) || ($st1==4)){
    $mod=' года';
}
if ($st==11) {
    $mod=' лет';
}
old($st, 'человеку- ', $mod);
gender(' женский','пол- ');
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
function old ($st,$star,$mod)
{
    echo "{$star}{$st}{$mod}<br>";
}
function gender ($gend1,$gend2)
{
    echo "{$gend2} {$gend1}<br>";
}
?>



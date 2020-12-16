<!DOCTYPE HTML>
<html>
<head>
    <title>урок 10</title>
</head>
<body>
<h2>Ветвление кода. elseif. switch.</h2>
<h2>Вывод трех рандомных чисел в порядке возрастания</h2>

<?php

$x1= rand (-100,100);
$x2= rand (-100,100);
$x3= rand (-100,100);

if(($x1>$x2) and ($x1>$x3) and ($x2>$x3)){
    echo("$x3 , $x2 , $x1");
}
if(($x1>$x2) and ($x1>$x3) and ($x2<$x3)){
    echo("$x2 , $x3 , $x1");
}
if(($x1<$x2) and ($x1>$x3) and ($x2>$x3)){
    echo("$x3 , $x1 , $x2");
}
if(($x1<$x2) and ($x1<$x3) and ($x2>$x3)){
    echo("$x1 , $x3 , $x2");
}
if(($x1>$x2) and ($x1<$x3) and ($x2<$x3)){
    echo("$x2 , $x1 , $x3");
}
if(($x1<$x2) and ($x1<$x3) and ($x2<$x3)){
    echo("$x1 , $x2 , $x3");
}
?>



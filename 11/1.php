DOCTYPE html>
<html>
<head><title>урок 11</title>
</head>
<body>
<h1>Функции. Начало.</h1>
<p>Задача 1. Создайте функцию, которая будет принимать
    параметры: имя, пол человека, адрес проживания, возраст.
    Результатом работы данной функции должен
    быть вывод информации.</p>
</body>
</html>
<?php
function getInfo($name, $sex, $adress, $age)
{
    echo "<h3>"."Данные изберателя:"."</h3><br>";
    echo "имя: ", $name."<br>". "  пол:  " ,$sex."<br>". "  адрес проживания: " , $adress."<br>". "  человеку:  ", $age;

    $st=$age%10;

    if (($st==0)||($st==5)||($st==6)||($st==7)||($st==8)||($st==9)){
        $mod=' лет';
    }
    if ($st==1) {
        $mod=' год';
    }
    if (($st==2) || ($st==3) || ($st==4)){
        $mod=' года';
    }
    if ($$age==11){
        $mod='лет';}
    echo $mod;
}
getInfo( 'Майя Мышкина','женский','414026, Астрахань , Сабанс-Яр, дом №',59) ;
?>
</body>
</html>

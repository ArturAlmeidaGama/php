<?php

echo 3+3+3 . "<br>";


$hypotenuse = 4**2 + 3**2;

echo sqrt($hypotenuse) . "<br>";


$numbers = [1,2,3,4,5];
$sum = 0;

foreach($numbers as $counter)
{
    $sum = $sum + $counter;
}

echo $sum . "<br>";


$numbers = [1,2,3,4,5];
$sum = 0;

foreach($numbers as $counter)
{
    $division = $counter / 5;
    $sum = $sum + $division;
}

echo $sum . "<br>";


$data = ["Leticia", 18, "rm1234567890"];

foreach($data as $show)
{
    echo $show . "<br>";
}
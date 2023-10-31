<?php

$division = 0;
$sum = 0;
$count = 0;
$students = 
[
    "Fulano" => [7, 8, 9],
    "Ciclano" => [3, 5, 8],
    "Beltrano" => [2, 4, 6],
];

foreach($students as $index => $grades)
{
    foreach($grades as $number)
    {
        $count = count($grades);
        $division = $number / $count;
        $sum = $sum + $division;
    }

    $division = 0;

    if($sum >= 6.0)
    {
        echo $index . ": " . $sum . " APROVADO <br>";
    }

    else
    {
        echo $index . ": " . $sum . " REPROVADO <br>";
    }

    $sum = 0;
}
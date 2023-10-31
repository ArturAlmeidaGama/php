<?php

$array1 = [rand(1,1000),rand(1,1000),rand(1,1000),rand(1,1000),rand(1,1000)];
$array2 = [];
$index = 0;

    foreach($array1 as $numberArray)
    {
        if($numberArray % 2 == 0)
        {
            $array2[$index] = $numberArray;
            $index++;
        }

        else
        {
            
        }
    }

    foreach($array2 as $show)
    {
        echo $show . "<br>";
    }
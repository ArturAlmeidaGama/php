<?php

class Tabuada
{
    public function conta()
    {
        for($number_1=1;$number_1<=10;$number_1++)
        {
            for($number_2=1;$number_2<=10;$number_2++)
            {
                $multiplication = $number_1*$number_2;

                echo $number_1.' x '.$number_2.' = '.$multiplication."<br>";
            }

            echo "<br>";
        }
    }
}

$tabuada = new Tabuada();
$tabuada->conta();
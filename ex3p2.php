<?php

$number=0; //o valor dessa variavel sera o número que quer descobrir se é primo ou não

if($number<=1 || is_float($number) || is_string($number))
{
    echo "Número inválido. Por favor, insira um número inteiro não negativo maior que 1.";
}

elseif($number<=9 && $number%4!=0 && $number/3!=2 && $number/3!=3)
{
    echo $number." é um número primo";
}

else
{
    if ($number%2==0 || $number%3==0 || $number%4==0 ||$number%5==0 || $number%6==0 || $number%7==0)
    {
        echo $number." não é um número primo";
    }

    else
    {
        echo $number." é um número primo";
    }
}
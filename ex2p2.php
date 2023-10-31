<?php

$number=0; //o valor dessa variavel sera o fatorial que deseja calcular

if($number<0 || is_float($number) || is_string($number))
{
    echo "Número inválido. Por favor, insira um número inteiro não negativo.";
}

elseif($number==0)
{
    echo '0! = '.$number+1;
}

else
{
    $multiplication=$number-1;
    $factorial=$number;

    for($factorial;$multiplication>0;$multiplication--)
    {
        $factorial=$factorial*$multiplication;
    }

    echo $number.'! = '.$factorial;
}
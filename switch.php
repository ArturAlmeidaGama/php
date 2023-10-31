<?php

$pizzaCode = 0;

switch ($pizzaCode)
{
case 1:
    echo "mussarela" . "<br>";
    echo 'R$50,00';
    break;

    case 2:
        echo "calabresa" . "<br>";
        echo 'R$55,00';
        break;

        case 3:
            echo "provolone"  . "<br>";
            echo 'R$60,00';
            break;

            default:
            echo "pizza não cadastrada";
}
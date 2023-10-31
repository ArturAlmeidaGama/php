<?php

require "funcao2.php"; //ele imterrompe a execusao se não achar o arquivo. Depende para sobreviver.
//include "funcao2.php"; //ele da warning mas continua o código. Não depende para sobreviver.
//include_once "funcao2.php"; //inclui uma unica vez um arquivo.
//require_once "funcao2.php"; //requere uma unica vez um arquivo.


$x = soma(2, 3);

echo $x;
echo " Volte sempre!";
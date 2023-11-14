<?php

session_start();

if(isset($_SESSION['name']))
{
    echo "Bem vindo, " . $_SESSION['name'];
}

else
{
    header("Location: http://localhost/hello_world/html2.html");
}
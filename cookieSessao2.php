<?php

$emailExpected = 'fulano@mail.com';
$passwordExpected = '123';
$email = $_POST['email'];
$name = "Fulano";
$password = $_POST['password'];

if($email == $emailExpected && $password == $passwordExpected)
{
    echo "<h1>Sessão gerada</h1>";

    session_start();

    $_SESSION['email'] = $email;
    $_SESSION['name'] = $name;
    
    header("Location: http://localhost/hello_world/conteudo.php");
}

else
{
    echo "<h1>Falha!</h1>";
    echo "<p>E-mail ou senha inválido</p>";
}
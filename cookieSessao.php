<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

 echo $name;
 echo '<br>';
 echo $email;
 echo '<br>';
 echo $password;

 setcookie('name', $name);
 setcookie('email', $email);
 setcookie('password', $password);

session_start();

$_SESSION['name'] = $name;
$_SESSION['email'] = $email;

echo $_SESSION['name'];
echo $_SESSION['email'];
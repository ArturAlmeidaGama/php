<?php

$xName = $_POST['name'];
$xEmail = $_POST['email'];
$xPassword = $_POST['password'];

// echo $xName;

// echo '<br>';

// echo $xEmail;

// echo '<br>';

// echo $xPassword;

// setcookie('name', $xName);
// setcookie('email', $xEmail);
// setcookie('password', $xPassword);

session_start();

$_SESSION['name'] = $xName;

$_SESSION['email'] = $xEmail;


echo $_SESSION['name'];

echo $_SESSION['email'];
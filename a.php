<<<<<<< HEAD
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
=======
<?php

>>>>>>> 45f25c7df8a2ebe6d16888e268ea4dd77e8372ff

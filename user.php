<?php

class User
{
    public $name;
    public $lastName;
    public $email;
    public $age;

    public function hello()
    {
        echo "De ";
        echo $this->name;
        echo "<br>Ola!<br><br>";
    }
}

$user1 = new User();
$user2 = new User();
$user1->name = "Fulano";
$user1->lastName = "Silva";
$user1->email = "@";
$user1->age = 17;
$user2->name = "Ciclano";
$user2->lastName = "Betrano";
$user2->email = "@@";
$user2->age = 18;

echo "USER1: <br>";

var_dump($user1);

echo "<br>USER2: <br>";

var_dump($user2);

echo "<br><br>";

$user1->hello();
$user2->hello();
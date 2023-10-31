<?php

class UserLegal
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

    public function fullName()
    {
        return $this->name . " " . $this->lastName;
    }
}

$user1 = new UserLegal();
$user2 = new UserLegal();
$user1->name = "Fulano";
$user1->lastName = "Silva";
$user1->email = "@";
$user1->age = 17;
$user2->name = "Ciclano";
$user2->lastName = "Betrano";
$user2->email = "@@";
$user2->age = 18;

echo $user1->fullName();
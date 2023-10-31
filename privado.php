<?php

class Privado
{
    private $name;
    private $age;

    public function __construct($name)
    {
        echo "Construindo ". $name . "...<br>";
        $this->name = $name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function isLegalAge()
    {
        if($this->age > 18) return true;

        return false;
    }
}

echo "Antes...<br>";

$user = new Privado('Ciclano');

echo "Depois...<br>";

$user->setName('Fulano');

echo $user->getName();
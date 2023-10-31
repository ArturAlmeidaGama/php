<?php

class Heranca
{
    private $name;
    protected $age;

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

class Client extends Heranca
{
public function isLegalAge()
{
    return true;
}
}

class Employer extends Heranca
{
    private $salary;

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

$client = new Client();
$client->setName('Cliente 1');

echo $client->getName(); 
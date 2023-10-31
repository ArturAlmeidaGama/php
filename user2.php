<?php

class User2
{
    private $name;
    private $age;

    public function isLegalAge()
    {
        if($this->age > 18) return true;

        return false;
    }
}
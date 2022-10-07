<?php
require_once "Car.php";

class Tesla extends Car
{
    public function message()
    {
        echo "{$this->getColor()} Tesla {$this->getDate()}";

    }
}
<?php
require_once 'Car.php';

class Mercedes extends Car
{

    public function message()
    {
        echo "$this->color Mersedes {$this->getDate()}";
    }

}
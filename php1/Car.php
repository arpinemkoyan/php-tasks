<?php

abstract class Car
{
    public $model;
    public $color;
    public $date;
    public $speed;

    function __construct($model, $color, $date, $speed)
    {
        $this->model = $model;
        $this->color = $color;
        $this->date = $date;
        $this->speed = $speed;
    }

    function getModel()
    {
        return $this->model;
    }

    function getColor()
    {
        return $this->color;
    }

    function getDate()
    {
        return $this->date;
    }

    function getSpeed()
    {
        return $this->speed;
    }

    abstract public function message();
}

?>
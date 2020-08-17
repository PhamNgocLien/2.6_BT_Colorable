<?php

include_once('Shape.php');
include_once 'Colorable.php';

class Circle extends Shape implements Colorable
{
    public $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter()
    {
        return pi() * $this->radius * 2;
    }

    public function resizeTo($number)
    {
        $this->radius += $number;
    }

    public function howToColor()
    {
        echo $this->show() . '. Area is: ' . $this->calculateArea() . '. Perimeter is: ' . $this->calculatePerimeter();
    }
}

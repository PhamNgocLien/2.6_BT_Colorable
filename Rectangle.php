<?php

include_once ('Shape.php');
include_once 'Colorable.php';
class Rectangle extends Shape implements Colorable
{
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(){
        return $this->height * $this->width;
    }

    public function calculatePerimeter(){
        return ($this->height + $this->width) * 2;
    }

    public function resizeTo($number)
    {
        $this->width += $number;
        $this->height += $number;
    }

    public function howToColor()
    {
        echo $this->show() . '. Area is: ' . $this->calculateArea() . '. Perimeter is: ' . $this->calculatePerimeter();
    }
}
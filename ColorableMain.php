<?php

include_once 'Circle.php';
include_once 'Rectangle.php';
include_once 'Square.php';

$circle = new Circle('circle',10);
echo $circle->howToColor() . '<br>';

$rectangle = new Rectangle('rectangle',10,5);
echo $rectangle->howToColor() . '<br>';

$square = new Square('square');
echo $square->howToColor();

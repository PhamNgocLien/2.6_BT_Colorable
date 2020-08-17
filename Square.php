<?php

include_once ('Rectangle.php');
include_once 'Colorable.php';
class Square extends Rectangle implements Colorable
{
    public function __construct($name)
    {
        parent::__construct($name,'','');
    }

    public function howToColor()
    {
        echo $this->show() . '. Color all four sides..';
    }
}
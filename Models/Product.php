<?php

class Product
{
    public $name;
    public $price;
    public $color;

    function __construct(string $name, string $price, string $color)
    {
        $this->name = $name;
        $this->price = $price;
        $this->color = $color;
    }
}

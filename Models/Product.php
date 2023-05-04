<?php

class Product
{
    public $name;
    public $size;
    public $color;
    public $image;
    public $price;

    function __construct(string $name, string $size, string $color, $image, int $price)
    {
        $this->name = $name;
        $this->size = $size;
        $this->color = $color;
        $this->image = $image;
        $this->price = $price;
    }
}

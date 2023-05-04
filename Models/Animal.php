<?php

class Animal
{

    public $breed;
    public $size;
    public $color;

    function __construct(string $breed, string $size, string $color)
    {

        $this->breed = $breed;
        $this->size = $size;
        $this->color = $color;
    }
}

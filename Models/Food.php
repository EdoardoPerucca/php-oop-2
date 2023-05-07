<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/../Traits/Rateable.php';

class Food extends Product
{
    use Rateable;

    protected $weight;

    function __construct(string $name, float $price, int $weight, Category $category)
    {

        parent::__construct($name, $price, $category);

        $this->weight = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }
}

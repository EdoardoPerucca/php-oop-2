<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';

class Toy extends Product
{
    protected $material;

    function __construct(string $name, float $price, string $material, Category $category)
    {

        parent::__construct($name, $price, $category);

        $this->material = $material;
    }

    public function getMaterial()
    {
        return $this->material;
    }
}

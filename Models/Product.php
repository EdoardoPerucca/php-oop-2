<?php

require_once __DIR__ . "/Category.php";

class Product
{
    protected $name;
    protected $price;
    protected $category;


    function __construct(string $name, float $price, Category $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getCategory()
    {
        return $this->category;
    }
}

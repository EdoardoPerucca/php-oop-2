<?php

require_once __DIR__ . './Models/Product.php';
require_once __DIR__ . './Models/Food.php';
require_once __DIR__ . './Models/Toy.php';


$categories = [
    new Category("Dog", "fa-dog"),
    new Category("Cat", "fa-cat"),
];


$cuccia = new Product("cuccia", 20, $categories[0]);

$crocchette = new Food("Monge", 2.5, 200, $categories[1]);

$leash = new Toy("Guinzaglio", 5, "Nylon", $categories[0]);




$products = [
    $cuccia,
    $crocchette,
    $leash
];

<?php

require_once './Models/Product.php';

/*
$productsType = [

    "cuccia" => new Product('cuccia', 20),
    "crocchette" => new Product('crocchette', 15)

];
*/


$cuccia = new Product("cuccia", "Media", "Nera");
$crocchette = new Product("crocchette", "Pollo", "XL");


$products = [
    $cuccia,
    $crocchette
];

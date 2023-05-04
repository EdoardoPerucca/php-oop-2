<?php

require_once './Models/Product.php';



$cuccia = new Product("cuccia", "Grande", "Nera", "<img src='img/cuccia.jpg'>", 20);
$guinzaglio = new Product("guinzaglio", "Lungo", "Blu", "img", 15);


$products = [
    $cuccia,
    $guinzaglio
];

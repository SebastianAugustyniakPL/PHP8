<?php

//Definiowanie własnych funkcji


function discountedPrice($price, $percenetageDiscount) {
    return $price - ($price * ($percenetageDiscount / 100 ));
}

$base_price = 100;
$percenetage_discount = 50; //procentowa wartość

echo discountedPrice($base_price, $percenetage_discount);
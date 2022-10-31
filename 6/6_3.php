<?php

//Funkcje Tablicowe

$a = [];

array_push($a, 2,3,4);
array_push($a, 100,200,300);
array_pop($a);// usuwanie ostatniej wartośći
array_shift($a); //usuwanie pierwszej wartośći

foreach ($a as $number) {
    echo $number . ', ';
}

echo '<br>';
echo 'Mamy ' . count($a) . ' elementow';


$b = 'Hello world with PHP Formularz ';
$b_array  = explode(' ', $b);

echo '<br><br>';

print_r($b_array);


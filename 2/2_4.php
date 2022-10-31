<?php

// deklaracja pustej tablicy
$numbers = [];

$numbers[] = 124;
$numbers[] = 250;
$numbers[] = 510;
$numbers[] = 2000;

//echo $numbers[0];

$imploder_result= implode(';', $numbers);

$explode_result= explode(';', $imploder_result);
//echo $explode_result[0];

echo 'Wynik:' .$numbers[0] + $numbers[1];
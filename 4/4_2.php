<?php

//Pętla for

$liczba = 5;
$silnia = 1;

/*
for($i = 1; $i <=$liczba; $i++) {
    $silnia = $silnia * $i;
}
*/

/*
$i = 1;
while($i <= $liczba) {
    $silnia = $silnia * $i;
    $i++;
}
*/
$i = 1;
do {
    $silnia *= $i;
    $i++;
} while($i <= $liczba);
echo $silnia;
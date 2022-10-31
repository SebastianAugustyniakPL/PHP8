<?php
// && koniunkcja
// || alternatywa
$a = 40;

/*
if ($a > 0 && $a < 30 ) {
    echo 'Zmienna a miesci się w przedziale liczb od 1 do 29';
} else if ($a >= 50 && $a <= 100) {
    echo 'Zmienna a miesci sie wprzedziale liczb od 50 do 100';
} else {
    echo 'Zmienna a nie mieści się w żadnym przedziale';
}
*/

if ($a > 0 || $a < 30 ) {
    echo 'Zmienna jest wieksza od 0 lub mniejsza od 30';
} else if ($a >= 50 && $a <= 100) {
    echo 'Zmienna a miesci sie wprzedziale liczb od 50 do 100';
} else {
    echo 'Zmienna a nie mieści się w żadnym przedziale';
}
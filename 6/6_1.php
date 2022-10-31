<?php

//Operacje na ciągach znaków

$a = ' tekst ';
$b = trim($a); //tekst

echo $a . '<br>';
echo $b;

$a_length=strlen($a);
$b_length=strlen($b);
echo '<br>';
echo 'Dlugosc A: ' . $a_length . '<br>';
echo 'Dlugosc B: ' . $b_length;

echo '<br><br>';

// czy jakiś ciąg znaków zawiera w sobie to czego szukamy
if (str_contains($a, 'tekst')) {
    echo 'Zmienna a zawiera słowo tekst';
} else {
    echo ' Zmienn a nie zawiera słowa tekst';
}

echo '<br><br>';

$c = 'Hello World with PHP Course';
echo strtoupper($c);
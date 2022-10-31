<?php

if (!file_exists('plik.txt')) {
    touch('plik.txt');
}

$file = fopen('plik.txt', 'a');
fwrite($file, 'Hello');
fclose($file);//zamknięcie pliku

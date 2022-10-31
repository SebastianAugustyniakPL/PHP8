<?php

//switch czyli zbiór ifów
// case - przypadek

$choice = 'nowa_gra';

switch ($choice) {
    case 'nowa_gra':
        echo 'Zaczynamy grę';
        break;
    case 'wczytaj_grę':
        echo 'Wybierz slot';
        break;
    case 'wyjdz_z_gry':
        echo 'Wychodzisz z gry';
        break;
    default:
        echo 'Nie ma takiej opcji';
        break;
}
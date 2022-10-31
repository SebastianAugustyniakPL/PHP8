<?php

//Pętla foreach

/*
$people = ['Jan', 'Bartek', 'Marta', 'Aleksander', 'Ola', 'Kasia'];

foreach ($people as $person ) {
    echo  $person . ' z Warszawy' . '<br>';

}
*/

$cars = [
  'Renault' => [
      'engine' => '1.0',
      'fuel' => 'pb95',
      'color' => 'black'
  ],
    'Audi' => [
        'engine' => '2.0',
        'fuel' => 'diesel',
        'color' => 'white'
    ]
];

 foreach ($cars as $car => $part) {
     echo $car . ' ' . $part['engine'] . '<br>';
 }
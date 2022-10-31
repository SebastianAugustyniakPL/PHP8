<?php

//klasy

//Struktura obiektowa
// nazwa klasy zawsze z wielkiej litery
//Hermetycaja modyfikatory dostępu
class Vehicle
{
    //pola w klasie
    private $brand;
    private $color;

    public function setBrand($brand) : void
    {
        $this->brand = $brand;
    }


    public function setColor($color) : void
    {
        $this->color = $color;
    }


    public function getBrand() : string
    {
        return $this->brand;
    }

    public function getColor() : string
    {
        return $this->color;
    }

    /*
    //metody
    public function drive() : string
    {
        return 'Jedziemy ...';
    }
    */
}

$car = new Vehicle(); //obiekt klasy vehicle
$car->setBrand('Reno');
$car->setColor('black');
echo $car->getBrand() . ' ' . $car->getColor();
//echo $car->drive();

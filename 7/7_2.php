<?php

//Konstruktor

class Person
{
    private int $age;
    private float $weight;

    public function __construct(int $age, float $weight)
    {
        $this->age = $age;
        $this->weight = $weight;
    }

    public function getAge() : int
    {
        return $this->age;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

}

$adam = new Person(18, 80);
$ewa = new Person(20, 65);

echo 'Wiek Adama: '. $adam->getAge();
echo '<br>';
echo 'Wiek Ewy: '. $ewa->getAge();
echo '<br>';
echo 'Waga Adama: '. $adam->getWeight();
echo '<br>';
echo 'Waga Ewy: '. $ewa->getWeight();
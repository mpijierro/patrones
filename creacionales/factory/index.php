<?php

class BmwFactory
{

    public function createCar()
    {
        return new BmwCar();
    }

    public function createMotorbike()
    {
        return new BmwMotorbike();
    }

}

interface Vehicle
{

    public function name();

    public function speed();

    public function oilConsume();

}

class BmwCar implements Vehicle
{

    public function name()
    {
        return 'Bmw Serie 1';
    }

    public function speed()
    {
        return 220;
    }

    public function oilConsume()
    {
        return 8.5;
    }

}


class BmwMotorbike implements Vehicle
{

    public function name()
    {
        return 'Bmw Motorcicle 1';
    }

    public function speed()
    {
        return 180;
    }

    public function oilConsume()
    {
        return 4;
    }

}


echo "<br>TEST ABSTRACT FACTORY";
echo "<br>";
$bmwFactory = new BmwFactory();

$bmwCar = $bmwFactory->createCar();
echo "<br>Name: " . $bmwCar->name();
echo "<br>Speed: " . $bmwCar->speed();
echo "<br>Oil consume: " . $bmwCar->oilConsume();
$bmwCar = $bmwFactory->createMotorbike();
echo "<br>Name: " . $bmwCar->name();
echo "<br>Speed: " . $bmwCar->speed();
echo "<br>Oil consume: " . $bmwCar->oilConsume();




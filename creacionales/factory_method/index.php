<?php

class BmwFactory
{
    public function createVehicle($vehicle)
    {

        if ($vehicle == 'car') {
            return new BmwCar();
        } elseif ($vehicle == 'motorbike') {
            return new BmwMotorbike();
        }

        throw new InvalidArgumentException(sprintf("Type %s not found", $vehicle));

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

$bmwCar = $bmwFactory->createVehicle('car');
echo "<br>Name: " . $bmwCar->name();
echo "<br>Speed: " . $bmwCar->speed();
echo "<br>Oil consume: " . $bmwCar->oilConsume();
$bmwCar = $bmwFactory->createVehicle('motorbike');
echo "<br>Name: " . $bmwCar->name();
echo "<br>Speed: " . $bmwCar->speed();
echo "<br>Oil consume: " . $bmwCar->oilConsume();




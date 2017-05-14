<?php

interface VehicleFactory
{
    public function createCar();

    public function createMotorbike();
}

class BmwFactory implements VehicleFactory
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

class HondaFactory implements VehicleFactory
{
    public function createCar()
    {
        return new HondaCar();
    }

    public function createMotorbike()
    {
        return new HondaMotorbike();
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

class HondaCar implements Vehicle
{

    public function name()
    {
        return 'Honda Civic';
    }

    public function speed()
    {
        return 1900;
    }

    public function oilConsume()
    {
        return 7;
    }

}


class HondaMotorbike implements Vehicle
{

    public function name()
    {
        return 'CBR 600';
    }

    public function speed()
    {
        return 269;
    }

    public function oilConsume()
    {
        return 6;
    }

}

echo "<br>TEST ABSTRACT FACTORY";
echo "<br>";
$bmwFactory = new BmwFactory();

$bmwCar = $bmwFactory->createCar();
echo "<br>Nmae: " . $bmwCar->name();
echo "<br>Nmae: " . $bmwCar->name();



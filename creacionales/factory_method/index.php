<?php


interface CreatorVehicle
{

    public function makeVehicle($vehicle);
}


class BmwFactory implements CreatorVehicle
{
    public function makeVehicle($vehicle)
    {

        if ($vehicle == 'car') {
            return new BmwCar();
        } elseif ($vehicle == 'motorbike') {
            return new BmwMotorbike();
        }

        throw new InvalidArgumentException(sprintf("Type %s not found", $vehicle));

    }

}

class HondaFactory implements CreatorVehicle
{
    public function makeVehicle($vehicle)
    {

        if ($vehicle == 'car') {
            return new HondaCar();
        } elseif ($vehicle == 'motorbike') {
            return new HondaCar();
        }

        throw new InvalidArgumentException(sprintf("Type %s not found", $vehicle));

    }

}

//

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

$bmwCar = $bmwFactory->makeVehicle('car');
echo "<br>Name: " . $bmwCar->name();
echo "<br>Speed: " . $bmwCar->speed();
echo "<br>Oil consume: " . $bmwCar->oilConsume();
$bmwCar = $bmwFactory->makeVehicle('motorbike');
echo "<br>Name: " . $bmwCar->name();
echo "<br>Speed: " . $bmwCar->speed();
echo "<br>Oil consume: " . $bmwCar->oilConsume();

$hondaFactory = new HondaFactory();
$hondaCar = $hondaFactory->makeVehicle('car');
echo "<br>Name: " . $hondaCar->name();
echo "<br>Speed: " . $hondaCar->speed();
echo "<br>Oil consume: " . $hondaCar->oilConsume();


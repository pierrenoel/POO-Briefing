<?php

interface CarInterface
{
    public function open() : void;
    public function start() : void;
    public function run() : void;
}

class Car implements CarInterface
{
    public function open() : void
    {
        echo 'The car is opened';
    }

    public function start() : void 
    {
        echo 'The card is started';
    }

    public function run() : void 
    {
        echo 'The car is running';
    }
}

class FacadeCar
{
    protected $car;

    public function __construct(Car $car){
        $this->car = $car;
    }

    public function turnOn()
    {
        $this->car->open();
        $this->car->start();
        $this->car->run();
    }
}


$car = new FacadeCar(new Car());
$car->turnOn();

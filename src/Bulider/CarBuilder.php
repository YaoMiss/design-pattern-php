<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-08-01
 * Time: 23:43
 */

namespace App\Bulider;


use App\Bulider\Parts\Car;
use App\Bulider\Parts\Door;
use App\Bulider\Parts\Engine;
use App\Bulider\Parts\Vehicle;
use App\Bulider\Parts\Wheel;

class CarBuilder implements BuilderInterface
{
    /** @var Car */
    private $car;

    public function createVehicle()
    {
        $this->car = new Car();
    }

    public function addWheel()
    {
        $this->car->setPart('wheelLF', new Wheel());
        $this->car->setPart('wheelRF', new Wheel());
        $this->car->setPart('wheelLR', new Wheel());
        $this->car->setPart('wheelRR', new Wheel());
    }

    public function addEngine()
    {
        $this->car->setPart('engine', new Engine());
    }

    public function addDoors()
    {
        $this->car->setPart('doorLF', new Door());
        $this->car->setPart('doorRF', new Door());
        $this->car->setPart('doorLR', new Door());
        $this->car->setPart('doorRR', new Door());
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}
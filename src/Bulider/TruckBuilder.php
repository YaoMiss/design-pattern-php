<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-08-01
 * Time: 23:51
 */

namespace App\Bulider;


use App\Bulider\Parts\Door;
use App\Bulider\Parts\Engine;
use App\Bulider\Parts\Truck;
use App\Bulider\Parts\Vehicle;
use App\Bulider\Parts\Wheel;

class TruckBuilder implements BuilderInterface
{
    /** @var Truck */
    private $truck;

    public function createVehicle()
    {
        $this->truck = new Truck();
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }

    public function addWheel()
    {
        $this->truck->setPart('wheel1', new Wheel());
        $this->truck->setPart('wheel2', new Wheel());
        $this->truck->setPart('wheel3', new Wheel());
        $this->truck->setPart('wheel4', new Wheel());
        $this->truck->setPart('wheel5', new Wheel());
        $this->truck->setPart('wheel6', new Wheel());
        $this->truck->setPart('wheel7', new Wheel());
        $this->truck->setPart('wheel8', new Wheel());
    }

    public function addEngine()
    {
        $this->truck->setPart('engine', new Engine());
    }

    public function addDoors()
    {
        $this->truck->setPart('doorLeft', new Door());
        $this->truck->setPart('doorRight', new Door());
    }
}
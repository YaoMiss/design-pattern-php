<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-08-01
 * Time: 23:59
 */

namespace Test;

use App\Bulider\CarBuilder;
use App\Bulider\Director;
use App\Bulider\Parts\Car;
use App\Bulider\Parts\Truck;
use App\Bulider\TruckBuilder;
use PHPUnit\Framework\TestCase;

class DirectorTest extends TestCase
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newTruck = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newTruck);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newCar = (new Director())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newCar);
    }

}
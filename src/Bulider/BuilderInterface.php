<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-08-01
 * Time: 23:15
 */

namespace App\Bulider;


use App\Bulider\Parts\Vehicle;

interface BuilderInterface
{
    public function createVehicle();

    public function getVehicle(): Vehicle;

    public function addWheel();

    public function addEngine();

    public function addDoors();

}
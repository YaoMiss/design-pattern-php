<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/8/27
 * Time: 10:51
 */

namespace App\Decorator;

class DoubleRoomBooking implements Booking
{

    public function calculatePrice(): int
    {
        return 40;
    }

    public function getDescription(): string
    {
        return 'double room';
    }
}

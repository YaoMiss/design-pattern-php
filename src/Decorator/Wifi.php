<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/8/27
 * Time: 10:57
 */

namespace App\Decorator;

class Wifi extends BookingDecorator
{
    const PRICE = 2;

    public function calculatePrice(): int
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    public function getDescription(): string
    {
        return $this->booking->getDescription() . ' with wifi';
    }
}

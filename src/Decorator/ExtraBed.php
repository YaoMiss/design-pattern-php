<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/8/27
 * Time: 10:52
 */

namespace App\Decorator;

class ExtraBed extends BookingDecorator
{
    const PRICE = 30;

    public function calculatePrice(): int
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    public function getDescription(): string
    {
        return $this->booking->getDescription() . ' with extra bed';
    }
}

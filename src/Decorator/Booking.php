<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/8/27
 * Time: 10:39
 */

namespace App\Decorator;


interface Booking
{
    public function calculatePrice(): int;

    public function getDescription(): string;
}
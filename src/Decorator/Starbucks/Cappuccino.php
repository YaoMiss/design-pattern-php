<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/8/27
 * Time: 12:05
 */

namespace App\Decorator\Starbucks;


class Cappuccino extends CondimentDecorator
{

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ':Cappuccino (Milk)';
    }

    public function cost(): int
    {
        return $this->beverage->cost() + 5;
    }
}
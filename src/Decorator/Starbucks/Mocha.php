<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/8/27
 * Time: 11:43
 */

namespace App\Decorator\Starbucks;


class Mocha extends CondimentDecorator
{
    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ': Mocha (Milk and Chocolate)';
    }

    public function cost(): int
    {
        return $this->beverage->cost() + 2;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/8/27
 * Time: 11:39
 */

namespace App\Decorator\Starbucks;

interface Beverage
{
    public function getDescription(): string;

    public function cost(): int;
}

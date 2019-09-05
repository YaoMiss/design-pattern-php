<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/8/27
 * Time: 11:42
 */

namespace App\Decorator\Starbucks;

abstract class CondimentDecorator implements Beverage
{

    protected $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }
}

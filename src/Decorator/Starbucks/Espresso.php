<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/8/27
 * Time: 11:41
 */

namespace App\Decorator\Starbucks;

/**
 * no any condiment
 * Class Espresso
 * @package App\Decorator\Starbucks
 */
class Espresso implements Beverage
{

    public function getDescription(): string
    {
        return 'Espresso';
    }

    public function cost(): int
    {
        return 10;
    }
}
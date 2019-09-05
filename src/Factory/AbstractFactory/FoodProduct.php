<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-07-23
 * Time: 22:03
 */

namespace App\Factory\AbstractFactory;

class FoodProduct implements ProductInterface
{
    /**
     * @var int
     */
    private $price;

    public function __construct(int $price)
    {
        $this->price = $price;
    }

    public function calcPrice(): int
    {
        return $this->price;
    }

    public function updatePrice(int $price)
    {
        return $this->price = $price;
    }
}

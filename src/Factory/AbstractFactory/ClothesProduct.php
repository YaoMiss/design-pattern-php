<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-07-23
 * Time: 22:06
 */

namespace App\Factory\AbstractFactory;


class ClothesProduct implements ProductInterface
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

    public function getDiscountPrice(float $discount):int
    {
        return ceil($this->price * $discount);
    }
}
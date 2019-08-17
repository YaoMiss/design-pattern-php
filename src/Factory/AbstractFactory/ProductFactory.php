<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-07-23
 * Time: 22:19
 */

namespace App\Factory\AbstractFactory;


class ProductFactory
{
    public function getClothesProduct(int $price): ClothesProduct
    {
        return new ClothesProduct($price);
    }

    public function getFoodProduct(int $price): FoodProduct
    {
        return new FoodProduct($price);
    }
}
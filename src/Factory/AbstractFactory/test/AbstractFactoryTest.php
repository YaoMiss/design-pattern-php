<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-07-25
 * Time: 09:43
 */

namespace App\Factory\AbstractFactory\test;


use App\Factory\AbstractFactory\ClothesProduct;
use App\Factory\AbstractFactory\FoodProduct;
use App\Factory\AbstractFactory\ProductFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateClothProduct()
    {
        $factory = new ProductFactory();
        $clothesProduct = $factory->getClothesProduct(100);

        $this->assertInstanceOf(ClothesProduct::class, $clothesProduct);
    }

    public function testCanCreateFoodProduct()
    {
        $factory = new ProductFactory();
        $foodProduct = $factory->getFoodProduct(150);
        $this->assertInstanceOf(FoodProduct::class,$foodProduct);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-07-25
 * Time: 09:43
 */

namespace Test;

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
        $this->assertInstanceOf(FoodProduct::class, $foodProduct);
    }

    public function testClothesCalcPriceAndDiscountPrice()
    {
        $factory = new ProductFactory();
        $clothesProduct = $factory->getClothesProduct(100);
        $this->assertEquals(100, $clothesProduct->calcPrice());
        $this->assertSame(80.0, $clothesProduct->getDiscountPrice('0.8'));
    }

    public function testFoodCalcPriceAnaUpdatePrice()
    {
        $factory = new ProductFactory();
        $foodProduct = $factory->getFoodProduct(150);
        $this->assertEquals(150, $foodProduct->calcPrice());
        $this->assertEquals(200, $foodProduct->updatePrice(200));
    }
}

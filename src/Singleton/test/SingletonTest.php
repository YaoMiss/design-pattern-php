<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-07-24
 * Time: 11:58
 */

namespace App\Singleton\test;

use PHPUnit\Framework\TestCase;
use App\Singleton\Singleton;

class SingletonTest extends TestCase
{

    public function testUniqueSingleton()
    {
        $firstSingleton = Singleton::getInstance();
        $secondSingleton = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $firstSingleton);
        $this->assertSame($firstSingleton, $secondSingleton);
    }

}
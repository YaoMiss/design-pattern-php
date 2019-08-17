<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-07-24
 * Time: 12:12
 */

namespace App\Factory\StaticFactory\test;


use App\Factory\StaticFactory\NumberFormat;
use App\Factory\StaticFactory\StaticFactory;
use App\Factory\StaticFactory\StringFormat;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    /**
     * @throws \Exception
     */
    public function testNumberFormat()
    {
        $this->assertInstanceOf(NumberFormat::class, StaticFactory::getFormatObj('number'));
    }

    /**
     * @throws \Exception
     */
    public function testStringFormat()
    {
        $this->assertInstanceOf(StringFormat::class, StaticFactory::getFormatObj('string'));
    }

    /**
     * @throws \Exception
     */
    public function testException()
    {
        StaticFactory::getFormatObj('obj');
    }

}
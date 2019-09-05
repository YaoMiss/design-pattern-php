<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-07-24
 * Time: 12:12
 */

namespace Test;

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
        $numberFormat = StaticFactory::getFormatObj('number');
        $this->assertEquals(1, $numberFormat->format('1'));
    }

    /**
     * @throws \Exception
     */
    public function testStringFormat()
    {
        $this->assertInstanceOf(StringFormat::class, StaticFactory::getFormatObj('string'));
        $stringFormat = StaticFactory::getFormatObj('string');
        $this->assertEquals('hello', $stringFormat->format('hello'));
    }

    /**
     * @throws \Exception
     */
    public function testException()
    {
        $this->expectException(\Exception::class);
        StaticFactory::getFormatObj('obj');
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/8/27
 * Time: 12:10
 */

namespace Test;


use App\Decorator\DoubleRoomBooking;
use App\Decorator\ExtraBed;
use App\Decorator\Starbucks\Cappuccino;
use App\Decorator\Starbucks\Espresso;
use App\Decorator\Starbucks\Mocha;
use App\Decorator\Wifi;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testCanCalculatePriceForBasicDoubleRoomBooking()
    {
        $booking = new DoubleRoomBooking();
        $this->assertSame(40, $booking->calculatePrice());
        $this->assertSame('double room', $booking->getDescription());
    }

    public function testCanCalculatePriceForDoubleRoomBookingWithWiFi()
    {
        $booking = new DoubleRoomBooking();
        $booking = new Wifi($booking);

        $this->assertSame(42, $booking->calculatePrice());
        $this->assertSame('double room with wifi', $booking->getDescription());
    }

    public function testCanCalculatePriceForDoubleRoomBookingWithWiFiAndExtraBed()
    {
        $booking = new DoubleRoomBooking();
        $booking = new WiFi($booking);
        $booking = new ExtraBed($booking);

        $this->assertSame(72, $booking->calculatePrice());
        $this->assertSame('double room with wifi with extra bed', $booking->getDescription());
    }


    public function testStarbucksCalcPriceForEspresso()
    {
        $espresso = new Espresso();

        $this->assertSame(10, $espresso->cost());
        $this->assertSame('Espresso', $espresso->getDescription());
    }

    public function testStarbucksCalcPriceForMocha()
    {
        $espresso = new Espresso();
        $mocha = new Mocha($espresso);

        $this->assertSame(12, $mocha->cost());
        $this->assertSame('Espresso: Mocha (Milk and Chocolate)', $mocha->getDescription());
    }

    public function testStarbucksCalcPriceCappuccino()
    {
        $espresso = new Espresso();
        $cappuccino = new Cappuccino($espresso);

        $this->assertSame(15,$cappuccino->cost());
        $this->assertSame('Espresso:Cappuccino (Milk)',$cappuccino->getDescription());
    }

}
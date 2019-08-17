<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-08-17
 * Time: 20:46
 */

namespace App\Facade\test;


use App\Facade\Example2\BiosInterface;
use App\Facade\Example2\Facade;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{

    public function testComputerOn()
    {
        $os = $this->createMock('App\Facade\Example2\OsInterface');

        $os->method('getName')->will($this->returnValue('Linux'));

        $bios = $this->getMockBuilder('App\Facade\Example2\BiosInterface')
            ->setMethods(['launch', 'execute', 'waitForKeyPress'])
            ->disableAutoload()
            ->getMock();


        $bios->expects($this->once())
            ->method('launch')
            ->with($os);

        /** @var  BiosInterface $bios */
        $facade = new Facade($bios, $os);
        // the facade interface is simple
        $facade->turnOn();
        // but you can also access the underlying components
        $this->assertSame('Linux', $os->getName());
    }

}
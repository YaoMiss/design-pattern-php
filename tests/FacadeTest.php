<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-08-17
 * Time: 20:46
 */

namespace Test;

use App\Facade\Example1\Leader;
use App\Facade\Example2\BiosInterface;
use App\Facade\Example2\Facade;
use App\Facade\Example2\OsInterface;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{

    public function testComputerOn()
    {
        $os = $this->createMock(OsInterface::class);

        $os->method('getName')->will($this->returnValue('Linux'));

        $bios = $this->getMockBuilder(BiosInterface::class)
//            ->setMethods(['launch', 'execute', 'waitForKeyPress'])
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
        $facade->turnOff();
    }

    public function testLeader()
    {
        $leader = new Leader();
        $this->assertSame('技术人员 (coder)', $leader->callCoder());
        $this->assertSame('测试人员(test member)', $leader->callTester());
    }
}

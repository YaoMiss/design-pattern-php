<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/18
 * Time: 17:06
 */

namespace Test;

use App\NullObject\NullLogger;
use App\NullObject\PrintLogger;
use App\NullObject\Service;
use PHPUnit\Framework\TestCase;

class NullObjectTest extends TestCase
{
    public function testNullObject()
    {
        $service = new Service(new NullLogger());
        $this->expectOutputString('');
        $service->doSomething();
    }

    public function testStandardLogger()
    {
        $service = new Service(new PrintLogger());
        $this->expectOutputString('We are in App\NullObject\Service::doSomething');
        $service->doSomething();
    }
}

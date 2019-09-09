<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/9
 * Time: 11:23
 */

namespace Test;

use App\Registry\Registry;
use PHPUnit\Framework\TestCase;

class RegistryTest extends TestCase
{
    public function testSetAndGetLogger()
    {
        $key = Registry::LOGGER;
        $logger = new \stdClass();

        Registry::set($key, $logger);

        $this->assertSame($logger, Registry::get($key));
        $this->assertInstanceOf(\stdClass::class, Registry::get($key));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testThrowsExceptionWhenTryingToSetInvalidKey()
    {
        Registry::set('test', new \stdClass());
    }

    /**
     * notice: should set a new process to handle this static function
     * @runInSeparateProcess
     * @expectedException \InvalidArgumentException
     */
    public function testThrowsExceptionWhenTryingToGetNotSetKey()
    {
        Registry::get(Registry::LOGGER);
    }
}

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
     */
    public function testThrowsExceptionWhenTryingToSetInvalidKey()
    {
        $this->expectException(\InvalidArgumentException::class);
        Registry::set('test', new \stdClass());
    }

    /**
     * notice: should set a new process to handle this static function
     * @runInSeparateProcess
     */
    public function testThrowsExceptionWhenTryingToGetNotSetKey()
    {
        $this->expectException(\InvalidArgumentException::class);
        Registry::get(Registry::LOGGER);
    }
}

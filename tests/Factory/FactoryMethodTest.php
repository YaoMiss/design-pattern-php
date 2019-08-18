<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-07-24
 * Time: 23:03
 */

namespace Test;


use App\Factory\FactoryMethod\FileLogger;
use App\Factory\FactoryMethod\FileLoggerFactory;
use App\Factory\FactoryMethod\StdoutLogger;
use App\Factory\FactoryMethod\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;


class FactoryMethodTest extends TestCase
{

    public function testCanCreateStdoutLogger()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();
        $this->assertInstanceOf(StdoutLogger::class, $logger);
        $this->assertEquals('Hello', $logger->log('Hello'));
    }

    public function testCanCreateFileLogger()
    {
        $path = __DIR__ . '/../../log/logger';
        $loggerFactory = new FileLoggerFactory($path);
        $logger = $loggerFactory->createLogger();
        $this->assertInstanceOf(FileLogger::class, $logger);
        unlink($path);
        $logger->log('Hello');
        $this->assertStringEqualsFile($path,'Hello'.PHP_EOL );
    }
}
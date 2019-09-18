<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/18
 * Time: 17:04
 */

namespace App\NullObject;

class Service
{
    /** @var Logger */
    private $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function doSomething()
    {
        $this->logger->log('We are in ' . __METHOD__);
    }
}

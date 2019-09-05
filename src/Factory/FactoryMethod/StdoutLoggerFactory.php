<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-07-23
 * Time: 22:40
 */

namespace App\Factory\FactoryMethod;

class StdoutLoggerFactory implements LoggerFactoryInterface
{
    public function createLogger(): LoggerInterface
    {
        return new StdoutLogger();
    }
}

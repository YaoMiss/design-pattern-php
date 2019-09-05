<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-07-23
 * Time: 22:31
 */

namespace App\Factory\FactoryMethod;

class StdoutLogger implements LoggerInterface
{

    public function log(string $message)
    {
        return  $message;
    }
}

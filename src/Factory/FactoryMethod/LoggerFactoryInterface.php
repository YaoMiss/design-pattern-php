<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-07-23
 * Time: 22:36
 */

namespace App\Factory\FactoryMethod;


interface LoggerFactoryInterface
{
    public function createLogger(): LoggerInterface;
}
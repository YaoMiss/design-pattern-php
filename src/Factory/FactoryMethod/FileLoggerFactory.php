<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-07-23
 * Time: 22:38
 */

namespace App\Factory\FactoryMethod;


class FileLoggerFactory implements LoggerFactoryInterface
{
    /**
     * @var string
     */
    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function createLogger(): LoggerInterface
    {
        return new FileLogger($this->filePath);
    }
}
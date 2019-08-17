<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-08-17
 * Time: 17:06
 */

namespace App\Pool;


class StringReverseWorker
{
    /** @var \DateTime */
    private $createAt;

    public function __construct()
    {
        $this->createAt = new \DateTime();
    }

    public function run(string $text)
    {
        return strrev($text);
    }
}
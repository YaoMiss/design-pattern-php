<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-08-18
 * Time: 16:29
 */

namespace App\Bridge;


class PlainTextFormatter implements FormatterInterface
{

    public function format(string $text)
    {
        return $text;
    }
}
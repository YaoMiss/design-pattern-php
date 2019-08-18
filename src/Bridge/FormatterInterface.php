<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-08-18
 * Time: 16:28
 */

namespace App\Bridge;


interface FormatterInterface
{
    public function format(string $text);
}
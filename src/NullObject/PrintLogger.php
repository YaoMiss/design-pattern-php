<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/18
 * Time: 17:04
 */

namespace App\NullObject;

class PrintLogger implements Logger
{
    public function log(string $str)
    {
        echo $str;
    }
}

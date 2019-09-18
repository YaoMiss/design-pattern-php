<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/18
 * Time: 17:03
 */

namespace App\NullObject;

class NullLogger implements Logger
{
    public function log(string $str)
    {
    }
}

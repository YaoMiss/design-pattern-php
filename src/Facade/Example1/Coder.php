<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-06-04
 * Time: 14:59
 */

namespace App\Facade\Example1;

class Coder
{
    private $name = '技术人员 (coder)';

    public function doWork()
    {
        return $this->name;
    }
}

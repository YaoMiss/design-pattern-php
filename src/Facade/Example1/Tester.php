<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-06-04
 * Time: 15:00
 */

namespace App\Facade\Example1;

class Tester
{
    private $name = "测试人员(test member)";

    public function doWork()
    {
        return  $this->name;
    }
}

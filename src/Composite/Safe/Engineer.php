<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-06-04
 * Time: 17:41
 */

namespace App\Composite\Safe;

class Engineer extends Employee
{
    public function __construct($name)
    {
        $this->setName($name);
    }

    function display()
    {
        return  sprintf("Engineer:" . $this->getName() . PHP_EOL);
    }
}

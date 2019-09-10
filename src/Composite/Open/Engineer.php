<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-06-04
 * Time: 17:57
 */

namespace App\Composite\Open;

class Engineer extends Employee
{
    public function __construct($name)
    {
        $this->setName($name);
    }

    public function add(Employee $employee)
    {
    }

    public function remove(Employee $employee)
    {
    }

    public function display()
    {
        return sprintf("Engineer:" . $this->getName() . PHP_EOL);
    }
}

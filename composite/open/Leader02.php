<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-06-04
 * Time: 18:00
 */

class Leader02 extends Employee02
{
    public function __construct($name)
    {
        $this->setName($name);
    }

    function add(Employee02 $employee)
    {
        $this->employees[] = $employee;

        return $this;
    }

    function remove(Employee02 $employee)
    {
        $key = $employee->getName();

        foreach ($this->employees as $employee) {
            if ($employee->getName() == $key) {
                unset($this->employees[$key]);
            }
        }

        return $this;
    }

    function display()
    {
        echo "领导：", $this->getName();

        foreach ($this->employees as $employee) {
            $employee->display();
        }
    }
}
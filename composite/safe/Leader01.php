<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-06-04
 * Time: 17:44
 */

class Leader01 extends Employee01
{
    /** @var Employee01[] */
    private $employees;

    public function __construct($name)
    {
        $this->setName($name);
    }

    public function add(Employee01 $employee)
    {
        $this->employees[] = $employee;

        return $this;
    }

    public function remove(Employee01 $employee)
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
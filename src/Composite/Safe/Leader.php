<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-06-04
 * Time: 17:44
 */

namespace App\Composite\Safe;

class Leader extends Employee
{
    /** @var Employee[] */
    private $employees;

    public function __construct($name)
    {
        $this->setName($name);
    }

    public function add(Employee $employee)
    {
        $this->employees[$employee->getName()] = $employee;

        return $this;
    }

    public function remove(Employee $employee)
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
        $leader = sprintf("Leader:" . $this->getName() . PHP_EOL);

        foreach ($this->employees as $employee) {
            $leader .= $employee->display();
        }

        return $leader;
    }
}

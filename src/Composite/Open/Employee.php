<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-06-04
 * Time: 17:54
 */

namespace App\Composite\Open;

abstract class Employee
{
    private $name;

    /** @var Employee[] */
    protected $employees;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmployees()
    {
        return $this->employees;
    }

    public function setEmployees($employees)
    {
        $this->employees = $employees;
    }

    abstract function add(Employee $employee);

    abstract function remove(Employee $employee);

    abstract function display();
}

<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-06-04
 * Time: 17:54
 */

abstract class Employee02
{
    private $name;

    /** @var Employee02[] */
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

    abstract function add(Employee02 $employee);

    abstract function remove(Employee02 $employee);

    abstract function display();
}
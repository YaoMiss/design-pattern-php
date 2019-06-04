<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-06-04
 * Time: 17:57
 */

class Engineer02 extends Employee02
{
    public function __construct($name)
    {
        $this->setName($name);
    }

    function add(Employee02 $employee)
    {
        // TODO: Implement add() method.
    }

    function remove(Employee02 $employee)
    {
        // TODO: Implement remove() method.
    }

    function display()
    {
        echo '工程师', $this->getName();
    }
}
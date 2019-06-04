<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-06-04
 * Time: 17:38
 */

abstract class Employee01
{

    private $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Employee01
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    abstract function display();
}
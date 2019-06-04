<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-06-04
 * Time: 17:41
 */

class Engineer01 extends Employee01
{
    public function __construct($name)
    {
        $this->setName($name);
    }

    function display()
    {
        echo "工程师：", $this->getName();
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-08-01
 * Time: 23:41
 */

namespace App\Bulider\Parts;

class Vehicle
{
    /** @var array */
    private $data = array();


    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-08-02
 * Time: 00:24
 */

namespace App\Prototype;

class BarBookPrototype extends BookPrototype
{

    protected $category = 'Bar';

    public function __clone()
    {
    }
}

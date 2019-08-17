<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-08-02
 * Time: 00:22
 */

namespace App\Prototype;


class FooBookPrototype extends BookPrototype
{
    protected $category = 'Foo';

    public function __clone()
    {
    }
}
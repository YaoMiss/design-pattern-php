<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-08-18
 * Time: 16:59
 */

namespace App\Bridge;


class HelloWorldService extends FormatterService
{

    function get()
    {
        return $this->formatterImplementation->format('Hello World');
    }
}
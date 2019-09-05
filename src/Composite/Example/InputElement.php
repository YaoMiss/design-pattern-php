<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-08-17
 * Time: 21:50
 */

namespace App\Composite\Example;

class InputElement implements RenderableInterface
{
    public function render(): string
    {
        return '<input type="text" />';
    }
}

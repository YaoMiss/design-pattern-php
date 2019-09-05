<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/8/28
 * Time: 16:41
 */

namespace App\Flyweight;

interface Text
{
    public function render(string $extrinsicState): string;
}

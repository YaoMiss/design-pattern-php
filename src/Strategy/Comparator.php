<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/19
 * Time: 16:28
 */

namespace App\Strategy;

interface Comparator
{
    public function compare($a, $b): int;
}

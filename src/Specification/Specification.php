<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/19
 * Time: 15:46
 */

namespace App\Specification;

interface Specification
{
    public function isSatisfiedBy(Item $item): bool;
}

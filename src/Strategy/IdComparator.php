<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/19
 * Time: 16:34
 */

namespace App\Strategy;

class IdComparator implements Comparator
{
    public function compare($a, $b): int
    {
        return $a['id'] <=> $b['id'];
    }
}

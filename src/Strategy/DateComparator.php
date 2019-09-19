<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/19
 * Time: 16:33
 */

namespace App\Strategy;

class DateComparator implements Comparator
{
    /**
     * @param $a
     * @param $b
     * @return int
     * @throws \Exception
     */
    public function compare($a, $b): int
    {
        $aDate = new \DateTime($a['date']);
        $bDate = new \DateTime($b['date']);

        return $aDate <=> $bDate;
    }
}

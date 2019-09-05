<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-08-12
 * Time: 00:41
 */

namespace App\Adapter;

interface EBookInterface
{
    public function lock();

    public function pressNext();

    /**
     * eBook return the current page and total page [current page ,total page]
     * @return array
     */
    public function getPage();

    public function unLock();
}

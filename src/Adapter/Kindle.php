<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-08-12
 * Time: 00:46
 */

namespace App\Adapter;


class Kindle implements EBookInterface
{

    private $page = 0;

    public function lock()
    {
    }

    public function pressNext()
    {
        $this->page++;
    }

    public function getPage()
    {
        return $this->page;
    }

    public function unLock()
    {
        $this->page = 0;
    }
}
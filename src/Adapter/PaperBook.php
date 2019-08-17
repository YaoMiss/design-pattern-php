<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-08-12
 * Time: 00:35
 */

namespace App\Adapter;


class PaperBook implements BookInterface
{
    /**
     * @var int
     */
    private $page = 0;

    public function turnPage()
    {
        $this->page++;
    }

    public function open()
    {
        $this->page = 1;
    }

    public function getPage(): int
    {
        return $this->page;
    }

    public function close()
    {
        $this->page = 0;
    }
}
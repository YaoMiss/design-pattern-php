<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-08-12
 * Time: 00:50
 */

namespace App\Adapter;

class EBookAdapter implements BookInterface
{
    private $eBook;

    public function __construct(EBookInterface $eBook)
    {
        $this->eBook = $eBook;
    }

    public function turnPage()
    {
        $this->eBook->pressNext();
    }

    public function open()
    {
        $this->eBook->unLock();
    }

    public function getPage(): int
    {
        $page = $this->eBook->getPage();

        return $page['currentPage'] ?? 1;
    }

    public function close()
    {
        $this->eBook->unLock();
    }
}

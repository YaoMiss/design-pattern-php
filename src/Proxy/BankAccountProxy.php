<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/8/28
 * Time: 16:59
 */

namespace App\Proxy;

class BankAccountProxy extends HeavyBankAccount implements BankAccountInterface
{
    /** @var int */
    private $balance;

    public function getBalance(): int
    {
        if ($this->balance === null) {
            $this->balance = parent::getBalance();
        }

        return $this->balance;
    }
}

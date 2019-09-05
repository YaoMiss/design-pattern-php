<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/8/28
 * Time: 17:00
 */

namespace App\Proxy;

class HeavyBankAccount implements BankAccountInterface
{
    /** @var array */
    private $transactions = array();

    public function deposit(int $amount)
    {
        $this->transactions[] = $amount;
    }

    public function getBalance()
    {
        return array_sum($this->transactions);
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/8/28
 * Time: 16:58
 */

namespace App\Proxy;

interface BankAccountInterface
{

    public function deposit(int $amount);

    public function getBalance();
}

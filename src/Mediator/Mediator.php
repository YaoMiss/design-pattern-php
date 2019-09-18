<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/18
 * Time: 16:18
 */

namespace App\Mediator;

interface Mediator
{
    public function getUser(string $username): string;
}

<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/18
 * Time: 16:23
 */

namespace App\Mediator;

class UserRepository extends Colleague
{
    public function getUserName(string $user): string
    {
        return sprintf('User: %s', $user);
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/19
 * Time: 16:18
 */

namespace App\State;

class StateDone implements State
{
    public function proceedToNext(OrderContext $context)
    {
    }

    public function getState(): string
    {
        return State::STATE_DONE;
    }
}

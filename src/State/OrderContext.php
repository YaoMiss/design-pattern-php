<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/19
 * Time: 16:16
 */

namespace App\State;

class OrderContext
{
    /**
     * @var State
     */
    private $state;

    public static function create(): OrderContext
    {
        $order = new self();
        $order->state = new StateCreated();

        return $order;
    }

    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function proceedToNext()
    {
        $this->state->proceedToNext($this);
    }

    public function getState()
    {
        return $this->state->getState();
    }
}

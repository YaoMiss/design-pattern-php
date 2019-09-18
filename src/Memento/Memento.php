<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/18
 * Time: 16:50
 */

namespace App\Memento;

class Memento
{
    /** @var State */
    private $state;

    public function __construct(State $stateToSave)
    {
        $this->state = $stateToSave;
    }

    public function getState()
    {
        return $this->state;
    }
}

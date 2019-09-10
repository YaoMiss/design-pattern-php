<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/10
 * Time: 10:14
 */

namespace App\Command;

class AddMessageDateCommand implements UndoableCommandInterface
{
    /** @var Receiver */
    private $output;

    public function __construct(Receiver $receiver)
    {
        $this->output = $receiver;
    }

    public function execute()
    {
        $this->output->enableDate();
    }

    public function undo()
    {
        $this->output->disableData();
    }
}

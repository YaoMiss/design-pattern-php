<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/10
 * Time: 09:44
 */

namespace App\Command;

class HelloCommand implements CommandInterface
{
    /** @var Receiver */
    private $output;

    public function __construct(Receiver $receiver)
    {
        $this->output = $receiver;
    }

    public function execute()
    {
        $this->output->write('This is a command name as HelloCommand');
    }
}

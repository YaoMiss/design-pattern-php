<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/10
 * Time: 10:08
 */

namespace Test;

use App\Command\AddMessageDateCommand;
use App\Command\HelloCommand;
use App\Command\Invoker;
use App\Command\Receiver;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    private $commonText = 'This is a command name as HelloCommand';

    public function testInvocation()
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();
        $this->assertSame($this->commonText, $receiver->getOutput());
    }

    public function testInvocation2()
    {

        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();
        $this->assertSame($this->commonText, $receiver->getOutput());

        $messageDateCommand = new AddMessageDateCommand($receiver);
        $messageDateCommand->execute();

        $invoker->run();
        $this->assertSame(
            sprintf($this->commonText . PHP_EOL . "[%s] " . $this->commonText, date('Y-m-d')),
            $receiver->getOutput()
        );

        $messageDateCommand->undo();
        $invoker->run();

        $this->assertSame(
            sprintf(
                $this->commonText . PHP_EOL . '[%s] ' . $this->commonText . PHP_EOL . $this->commonText,
                date('Y-m-d')
            ),
            $receiver->getOutput()
        );
    }
}

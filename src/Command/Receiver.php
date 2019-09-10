<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/10
 * Time: 09:46
 */

namespace App\Command;

class Receiver
{
    /** @var bool */
    private $enableData = false;

    /** @var string[] */
    private $output = array();

    public function write(string $str)
    {
        if ($this->enableData) {
            $str = sprintf('[%s] %s', date('Y-m-d'), $str);
        }

        $this->output[] = $str;
    }

    public function getOutput(): string
    {
        return join(PHP_EOL, $this->output);
    }

    public function enableDate()
    {
        $this->enableData = true;
    }

    public function disableData()
    {
        $this->enableData = false;
    }
}

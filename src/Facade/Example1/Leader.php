<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-06-04
 * Time: 14:59
 */

namespace App\Facade\Example1;

class Leader
{
    /** @var Coder */
    private $coder;

    /** @var Tester */
    private $tester;

    public function __construct()
    {
        $this->coder = new Coder;
        $this->tester = new Tester();
    }

    public function callCoder()
    {
        return $this->coder->doWork();
    }

    public function callTester()
    {
        return $this->tester->doWork();
    }
}
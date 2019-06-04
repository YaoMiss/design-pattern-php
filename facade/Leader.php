<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-06-04
 * Time: 14:59
 */

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
        $this->coder->doWork();
    }

    public function callTester()
    {
        $this->tester->doWork();
    }
}
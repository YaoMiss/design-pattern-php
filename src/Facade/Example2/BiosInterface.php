<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-08-17
 * Time: 19:27
 */

namespace App\Facade\Example2;

interface BiosInterface
{
    public function execute();

    public function waitForKeyPress();

    public function launch(OsInterface $os);

    public function powerDown();
}

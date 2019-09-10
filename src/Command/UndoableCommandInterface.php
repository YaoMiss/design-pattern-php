<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/10
 * Time: 10:06
 */

namespace App\Command;

interface UndoableCommandInterface extends CommandInterface
{
    public function undo();
}

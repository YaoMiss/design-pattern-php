<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/19
 * Time: 15:33
 */

namespace App\Observer;

use SplSubject;

class UserObserver implements \SplObserver
{
    private $changedUsers = array();

    public function update(SplSubject $subject)
    {
        $this->changedUsers [] = clone $subject;
    }

    public function getChangeUsers(): array
    {
        return $this->changedUsers;
    }
}

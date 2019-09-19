<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/19
 * Time: 15:27
 */

namespace App\Observer;

use SplObserver;

class User implements \SplSubject
{
    /** @var string */
    private $email;

    /** @var \SplObjectStorage */
    private $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        /** @var SplObserver $observer */
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function changeEmail(string $email)
    {
        $this->email = $email;
        $this->notify();
    }
}

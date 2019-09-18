<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/18
 * Time: 16:25
 */

namespace App\Mediator;

class UserRepositoryUiMediator implements Mediator
{
    /** @var UserRepository */
    private $userRepository;

    /** @var Ui */
    private $ui;

    public function __construct(UserRepository $userRepository, Ui $ui)
    {
        $this->userRepository = $userRepository;
        $this->ui = $ui;

        $this->userRepository->setMediator($this);
        $this->ui->setMediator($this);
    }

    public function printInfoAbout(string $user)
    {
        $this->ui->outputUserInfo($user);
    }

    public function getUser(string $username): string
    {
        return $this->userRepository->getUserName($username);
    }
}

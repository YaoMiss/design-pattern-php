<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/8/27
 * Time: 00:40
 */

namespace App\DataMapper;


class User
{
    private $username;

    private $email;

    public function __construct(string $username, string $email)
    {
        $this->email = $email;
        $this->username = $username;
    }

    public static function getUserFromState(array $state): User
    {
        return new self($state['username'] ?? '', $state['email'] ?? '');
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
}
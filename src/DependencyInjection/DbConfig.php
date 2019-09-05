<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/8/28
 * Time: 15:05
 */

namespace App\DependencyInjection;

class DbConfig
{
    /**
     * @var string
     */
    private $host;

    /**
     * @var string
     */
    private $port;

    /** @var string */
    private $username;

    /** @var string */
    private $password;

    public function __construct(array $options)
    {
        $this->host = $options['host'] ?? 'localhost';
        $this->port = $options['port'] ?? '3306';
        $this->username = $options['username'] ?? 'root';
        $this->password = $options['password'] ?? 'root';
    }

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @return string
     */
    public function getPort(): string
    {
        return $this->port;
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
    public function getPassword(): string
    {
        return $this->password;
    }
}

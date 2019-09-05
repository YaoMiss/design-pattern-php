<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/8/28
 * Time: 15:07
 */

namespace App\DependencyInjection;

class DbConnection
{
    /** @var DbConfig */
    private $config;

    public function __construct(DbConfig $config)
    {
        $this->config = $config;
    }

    public function getDsn()
    {
        return sprintf(
            '%s:%s@%s:%d',
            $this->config->getUsername(),
            $this->config->getPassword(),
            $this->config->getHost(),
            $this->config->getPort()
        );
    }
}

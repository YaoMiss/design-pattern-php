<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/8/28
 * Time: 15:13
 */

namespace Test;

use App\DependencyInjection\DbConfig;
use App\DependencyInjection\DbConnection;
use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjection()
    {
        $config = new DbConfig(
            array(
                'host'     => 'localhost',
                'port'     => 3306,
                'username' => 'Packie',
                'password' => 'Packie',
            )
        );
        $connection = new DbConnection($config);

        $this->assertSame('Packie:Packie@localhost:3306', $connection->getDsn());
    }
}

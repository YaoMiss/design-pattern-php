<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/8/27
 * Time: 10:05
 */

namespace Test;

use App\DataMapper\StorageAdapter;
use App\DataMapper\User;
use App\DataMapper\UserMapper;
use PHPUnit\Framework\TestCase;

class DataMapperTest extends TestCase
{
    public function testCanMapUserFromStorage()
    {
        $storage = new StorageAdapter(array(
            1 => array(
                'username' => 'BilYooYam',
                'email'    => 'biyongyao@gmail.com',
            ),
        ));

        $mapper = new UserMapper($storage);
        $user = $mapper->findById(1);

        $this->assertInstanceOf(User::class, $user);
    }

    public function testWillNotMapInvalidData()
    {
        $this->expectException(\InvalidArgumentException::class);

        $storage = new StorageAdapter([]);

        $mapper = new UserMapper($storage);

        $mapper->findById(1);
    }
}

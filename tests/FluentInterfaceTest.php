<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/8/28
 * Time: 15:48
 */

namespace Test;

use App\FluentInterface\Sql;
use PHPUnit\Framework\TestCase;

class FluentInterfaceTest extends TestCase
{

    public function testBuildSQL()
    {
        $query = new Sql();
        $query->select(['name', 'password'])
            ->from('user', 'u')->from('user_info', 'info')
            ->where('u.id == info.id');

        $this->assertSame(
            'SELECT name, password FROM user AS u, user_info AS info WHERE u.id == info.id',
            (string)$query
        );
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-08-17
 * Time: 17:17
 */

namespace Test;

use App\Pool\WorkerPool;
use PHPUnit\Framework\TestCase;

class PoolTest extends TestCase
{
    public function testCanGetNewInstancesWithGet()
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $worker2 = $pool->get();
        $this->assertCount(2, $pool);
        $this->assertNotSame($worker1, $worker2);
    }

    public function testCanGetSameInstanceTwiceWhenDisposingItFirst()
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $pool->dispose($worker1);
        $worker2 = $pool->get();
        $this->assertCount(1, $pool);
        $this->assertSame($worker1, $worker2);

        $this->assertEquals('krow', $worker1->run('work'));
    }
}

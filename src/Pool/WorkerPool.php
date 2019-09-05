<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-08-17
 * Time: 17:05
 */

namespace App\Pool;

class WorkerPool implements \Countable
{
    /** @var StringReverseWorker[] */
    private $occupiedWorkers = array();

    /** @var StringReverseWorker[] */
    private $freeWorkers = array();

    public function get(): StringReverseWorker
    {
        if (count($this->freeWorkers) == 0) {
            $work = new StringReverseWorker();
        } else {
            $work = array_pop($this->freeWorkers);
        }

        $this->occupiedWorkers[spl_object_hash($work)] = $work;

        return $work;
    }

    public function dispose(StringReverseWorker $worker)
    {
        $key = spl_object_hash($worker);

        if (isset($this->occupiedWorkers[$key])) {
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }

    public function count(): int
    {
        return count($this->occupiedWorkers) + count($this->freeWorkers);
    }
}

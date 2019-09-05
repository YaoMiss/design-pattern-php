<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/8/27
 * Time: 00:44
 */

namespace App\DataMapper;

class StorageAdapter
{
    private $data = array();

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function find(int $id)
    {
        if (isset($this->data[$id])) {
            return $this->data[$id];
        }

        return null;
    }
}

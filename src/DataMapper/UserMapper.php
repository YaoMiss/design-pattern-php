<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/8/27
 * Time: 00:47
 */

namespace App\DataMapper;

class UserMapper
{
    private $adapter;

    /**
     * UserMapper constructor.
     * @param StorageAdapter $storageAdapter
     */
    public function __construct(StorageAdapter $storageAdapter)
    {
        $this->adapter = $storageAdapter;
    }

    public function findById(int $id): User
    {
        $result = $this->adapter->find($id);

        if ($result === null) {
            throw new\InvalidArgumentException('User id cannot found');
        }

        return $this->mapRowToUser($result);
    }


    private function mapRowToUser(array $row): User
    {
        return User::getUserFromState($row);
    }
}
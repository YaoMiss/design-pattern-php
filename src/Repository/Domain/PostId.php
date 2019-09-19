<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/19
 * Time: 17:26
 */

namespace App\Repository\Domain;

class PostId
{
    /**
     * @var int
     */
    private $id;

    public static function fromInt(int $id)
    {
        self::ensureIsValid($id);

        return new self($id);
    }

    private function __construct(int $id)
    {
        $this->id = $id;
    }

    public function toInt(): int
    {
        return $this->id;
    }

    private static function ensureIsValid(int $id)
    {
        if ($id <= 0) {
            throw new \InvalidArgumentException('Invalid PostId given');
        }
    }
}

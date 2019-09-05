<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/8/28
 * Time: 16:43
 */

namespace App\Flyweight;

class Character implements Text
{
    /** @var string */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function render(string $font): string
    {
        return sprintf('Character %s with font %s', $this->name, $font);
    }
}

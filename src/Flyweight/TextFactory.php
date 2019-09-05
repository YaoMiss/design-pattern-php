<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/8/28
 * Time: 16:47
 */

namespace App\Flyweight;

class TextFactory implements \Countable
{
    /** @var array  */
    private $charPool = array();

    public function get(string $name): Text
    {
        if (!isset($this->charPool[$name])) {
            $this->charPool[$name] = $this->create($name);
        }

        return $this->charPool[$name];
    }

    public function count(): int
    {
        return count($this->charPool);
    }

    private function create(string $name): Text
    {
        if (strlen($name) == 1) {
            return new Character($name);
        } else {
            return new Word($name);
        }
    }
}

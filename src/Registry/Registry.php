<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/9
 * Time: 11:10
 */

namespace App\Registry;

abstract class Registry
{
    const LOGGER = 'logger';

    private static $storedValues = array();

    private static $allowedKeys = array(
        self::LOGGER,
    );

    public static function set(string $key, $value)
    {
        if (!in_array($key, self::$allowedKeys)) {
            throw new \InvalidArgumentException('Invalid key given');
        }

        self::$storedValues[$key] = $value;
    }

    public static function get(string $key)
    {
        if (!in_array($key, self::$allowedKeys) || !isset(self::$storedValues[$key])) {
            throw new \InvalidArgumentException('Invalid key given');
        }

        return self::$storedValues[$key];
    }
}

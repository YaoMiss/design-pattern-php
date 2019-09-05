<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-07-23
 * Time: 22:45
 */

namespace App\Factory\StaticFactory;

class StaticFactory
{
    /**
     * @param string $type
     * @return FormatInterface
     * @throws \Exception
     */
    public static function getFormatObj(string $type): FormatInterface
    {
        switch ($type) {
            case 'number':
                return new NumberFormat();
                break;

            case 'string':
                return new StringFormat();
                break;

            default:
                throw new \Exception("don't have this type format !");
        }
    }
}

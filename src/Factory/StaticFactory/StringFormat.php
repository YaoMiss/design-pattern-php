<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-07-23
 * Time: 22:45
 */

namespace App\Factory\StaticFactory;

class StringFormat implements FormatInterface
{

    public function format(string $input): string
    {
        return $input;
    }
}

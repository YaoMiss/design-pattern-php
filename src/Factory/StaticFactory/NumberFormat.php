<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-07-23
 * Time: 22:44
 */

namespace App\Factory\StaticFactory;

class NumberFormat implements FormatInterface
{
    public function format(string $input): string
    {
        return number_format(intval($input));
    }
}

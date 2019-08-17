<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-07-23
 * Time: 22:42
 */

namespace App\Factory\StaticFactory;


interface FormatInterface
{
    public function format(string $input): string;
}
<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-08-17
 * Time: 19:28
 */

namespace App\Facade\Example2;

interface OsInterface
{
    public function halt();

    public function getName(): string;
}

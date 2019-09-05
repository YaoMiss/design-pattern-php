<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-08-12
 * Time: 00:32
 */

namespace App\Adapter;

interface BookInterface
{

    public function turnPage();

    public function open();

    public function getPage(): int;

    public function close();
}

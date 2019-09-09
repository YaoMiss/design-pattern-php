<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/9
 * Time: 12:14
 */

namespace App\Responsibilities\Responsible;

use App\Responsibilities\Handler;
use Psr\Http\Message\RequestInterface;

class SlowDataBaseHandler extends Handler
{
    protected function processing(RequestInterface $request)
    {
        return 'Hello World!';
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/9
 * Time: 11:44
 */

namespace App\Responsibilities;

use Psr\Http\Message\RequestInterface;

abstract class Handler
{
    private $successor = null;

    public function __construct(Handler $handler = null)
    {
        $this->successor = $handler;
    }

    final public function handle(RequestInterface $request)
    {
        $processed = $this->processing($request);

        if ($processed === null && $this->successor !== null) {
            $processed = $this->successor->handle($request);
        }

        return $processed;
    }

    abstract protected function processing(RequestInterface $request);
}

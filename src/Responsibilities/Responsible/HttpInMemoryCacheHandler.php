<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/9
 * Time: 12:09
 */

namespace App\Responsibilities\Responsible;

use App\Responsibilities\Handler;
use Psr\Http\Message\RequestInterface;

class HttpInMemoryCacheHandler extends Handler
{
    /** @var array */
    private $data;

    public function __construct(array $data, Handler $handler = null)
    {
        parent::__construct($handler);
        $this->data = $data;
    }


    protected function processing(RequestInterface $request)
    {
        $key = sprintf('%s?%s', $request->getUri()->getPath(), $request->getUri()->getQuery());

        if ($request->getMethod() == 'GET' && isset($this->data[$key])) {
            return $this->data[$key];
        }

        return null;
    }
}

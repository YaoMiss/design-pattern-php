<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-08-18
 * Time: 17:21
 */

namespace Test;

use App\Bridge\HelloWorldService;
use App\Bridge\HtmlFormatter;
use App\Bridge\PlainTextFormatter;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function testCanPrintUsingThePlainTextFormatter()
    {
        $service = new HelloWorldService(new PlainTextFormatter());
        $this->assertSame('Hello World', $service->get());
    }

    public function testCanPrintUsingTheHtmlFormatter()
    {
        $service = new HelloWorldService(new HtmlFormatter());
        $this->assertSame('<p>Hello World</p>', $service->get());
    }
}

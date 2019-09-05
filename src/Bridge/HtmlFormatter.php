<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-08-18
 * Time: 16:31
 */

namespace App\Bridge;

class HtmlFormatter implements FormatterInterface
{

    public function format(string $text)
    {
        return sprintf('<p>%s</p>', $text);
    }
}

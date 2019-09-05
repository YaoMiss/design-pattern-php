<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-08-18
 * Time: 16:34
 */

namespace App\Bridge;

abstract class FormatterService
{
    /** @var FormatterInterface */
    protected $formatterImplementation;

    public function __construct(FormatterInterface $formatter)
    {
        $this->formatterImplementation = $formatter;
    }

    abstract public function get();
}

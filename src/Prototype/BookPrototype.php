<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-08-02
 * Time: 00:19
 */

namespace App\Prototype;

abstract class BookPrototype
{
    /** @var string */
    protected $title;

    /** @var string */
    protected $category;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return BookPrototype
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    abstract public function __clone();
}

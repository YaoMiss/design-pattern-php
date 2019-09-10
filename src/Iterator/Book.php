<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/10
 * Time: 10:55
 */

namespace App\Iterator;

class Book
{
    /** @var string */
    private $author;

    /** @var string */
    private $title;

    public function __construct(string $title, string $author)
    {
        $this->author = $author;
        $this->title = $title;
    }

    public function getAuthor()
    {
        return $this->getAuthor();
    }

    public function getTitle()
    {
        return $this->getTitle();
    }

    public function getAuthorAndTitle()
    {
        return $this->getTitle() . ' by' . $this->getAuthor();
    }
}

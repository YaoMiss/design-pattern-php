<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-08-18
 * Time: 17:28
 */

namespace Test;

use App\Adapter\BookInterface;
use App\Adapter\EBookAdapter;
use App\Adapter\Kindle;
use App\Adapter\PaperBook;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testCanTurnPageOnBook()
    {
        $book = new PaperBook();
        $book->open();
        $book->turnPage();
        $this->assertSame(2, $book->getPage());
        $book->close();
    }

    public function testCanTurnPageOnKindleLikeInANormalBook()
    {
        $kindle = new Kindle();
        $book = new EBookAdapter($kindle);
        $book->open();
        $book->turnPage();
        $this->assertSame(1, $book->getPage());
        $book->close();
        $kindle->lock();
    }

    public function testInterFace()
    {
        $bookInterface = $this->createMock(BookInterface::class);
        $bookInterface->method('getPage')
            ->will($this->returnValue(0));
//        $eBookInterface = $this->createMock(EBookInterface::class);

        $this->assertSame(0, $bookInterface->getPage());
    }

}
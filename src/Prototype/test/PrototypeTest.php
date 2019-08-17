<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-08-02
 * Time: 00:25
 */

namespace App\Prototype\test;


use App\Prototype\BarBookPrototype;
use App\Prototype\FooBookPrototype;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testCanGetFooBook()
    {
        $fooBookPrototype = new FooBookPrototype();
        $barBookPrototype = new BarBookPrototype();


        for ($i = 0; $i < 10; $i++) {
            $book = clone $fooBookPrototype;
            $book->setTitle('Foo PaperBook No ' . $i);
            $this->assertInstanceOf(FooBookPrototype::class, $book);
        }
        for ($i = 0; $i < 5; $i++) {
            $book = clone $barBookPrototype;
            $book->setTitle('Bar PaperBook No ' . $i);
            $this->assertInstanceOf(BarBookPrototype::class, $book);
        }
    }
}
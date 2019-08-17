<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-05-17
 * Time: 03:40
 */

namespace App\Singleton;
/**
 * Class Singleton
 * 懒汉式单例模式
 * 第一次使用的时候才创建对象，也就是把创建对象的时机从加载延迟到第一次使用
 * 出现的问题：可能在多线程高并发的时候，在同一个时间点，instance 都为 null，那么创建两个对象，java 使用 synchronized 来解决这个问题
 */
class Singleton
{
    /**
     * 需要是私有，不能直接被外界调用
     * @var null
     */
    private static $instance = null;

    /**
     * Singleton constructor.
     * 构造函数要是私有，因为单例模式无法通过外界创建对象，
     * 只能通过自己内部方法创建单例对象
     */
    private function __construct()
    {
        //@todo your init
    }

    public static function getInstance()
    {
        //多个线程判断 instance 都为null时，在执行new操作时多线程会出现重复情况
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function __clone()
    {
        echo 'not allow clone';
    }
}
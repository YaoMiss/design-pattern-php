<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-06-04
 * Time: 01:38
 */

/**
 * Class Singleton01
 *
 * 饿汉单例模式
 * PHP 中不能这样使用，
 * 原理：饿汉式单例模式实现方式在类加载到内存的时候，就创建好对象了
 */
class Singleton01
{
    // PHP 不允许这样实现，所以注释

//    private static $instance = new Singleton01();

    public function __construct()
    {
        //@todo something you can do here
    }

    public static function getInstance()
    {
        return Singleton01::$instance;
    }
}
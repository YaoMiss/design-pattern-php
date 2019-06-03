<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-05-18
 * Time: 18:20
 */


/**
 * Class adapter01
 * 适配器模式 ： 类适配器
 */
class adapter01 extends Adapting implements Target
{
    function request()
    {
        parent::adaptingRequest();
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-05-18
 * Time: 18:20
 */

/**
 * Class adapter02
 * 适配器模式 ： 对象适配器
 */
class adapter02 implements Target
{
    function request()
    {
        $adapting = new Adapting();
        $adapting->adaptingRequest();
    }
}
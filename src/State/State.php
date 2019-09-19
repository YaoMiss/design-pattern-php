<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/19
 * Time: 16:16
 */

namespace App\State;

interface State
{
    const STATE_CREATED = 'created';
    const STATE_DONE = 'done';
    const STATE_SHIPPED = 'shipped';

    public function proceedToNext(OrderContext $context);

    public function getState(): string;
}

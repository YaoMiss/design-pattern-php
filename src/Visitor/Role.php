<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/19
 * Time: 16:57
 */

namespace App\Visitor;

interface Role
{
    public function accept(RoleVisitor $visitor);
}

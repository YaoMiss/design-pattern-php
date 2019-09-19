<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/19
 * Time: 16:59
 */

namespace App\Visitor;

interface RoleVisitor
{
    public function visitUser(User $role);

    public function visitGroup(Group $role);
}

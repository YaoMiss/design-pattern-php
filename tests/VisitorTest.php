<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/9/19
 * Time: 17:08
 */

namespace Test;

use App\Visitor\Group;
use App\Visitor\RecordingVisitor;
use App\Visitor\Role;
use App\Visitor\User;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    /**
     * @var RecordingVisitor
     */
    private $visitor;

    protected function setUp(): void
    {
        $this->visitor = new RecordingVisitor();
    }

    public function provideRoles()
    {
        return [
            [new User('Dominik')],
            [new Group('Administrators')],
        ];
    }

    /**
     * @dataProvider provideRoles
     *
     * @param Role $role
     */
    public function testVisitSomeRole(Role $role)
    {
        $role->accept($this->visitor);
        $this->assertSame($role, $this->visitor->getVisited()[0]);
    }
}

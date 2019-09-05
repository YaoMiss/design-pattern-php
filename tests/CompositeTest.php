<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-08-17
 * Time: 22:13
 */

namespace Test;

use App\Composite\Example\Form;
use App\Composite\Example\InputElement;
use App\Composite\Example\TextElement;
use App\Composite\Safe\Engineer;
use App\Composite\Safe\Leader;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    public function testRender()
    {
        $form = new Form();
        $form->addElement(new TextElement('Email:'));
        $form->addElement(new InputElement());

        $embed = new Form();
        $embed->addElement(new TextElement('Password:'));
        $embed->addElement(new InputElement());
        $form->addElement($embed);

        $this->assertSame(
            '<form>Email:<input type="text" /><form>Password:<input type="text" /></form></form>',
            $form->render()
        );
    }

    public function testSafeType()
    {
        $leader = new Leader('CTO');
        $backendEngineer = new Engineer('backend');
        $frontendEngineer = new Engineer('frontend');
        $leader->add($backendEngineer);
        $leader->add($frontendEngineer);

        $this->assertSame(
            sprintf('Leader:CTO' . PHP_EOL . 'Engineer:backend' . PHP_EOL . 'Engineer:frontend' . PHP_EOL),
            $leader->display()
        );

        $leader->remove($backendEngineer);

        $this->assertSame(
            sprintf('Leader:CTO' . PHP_EOL . 'Engineer:frontend' . PHP_EOL),
            $leader->display()
        );
    }

    public function testOpenType()
    {
        $leader = new \App\Composite\Open\Leader('CTO');
        $backendEngineer = new \App\Composite\Open\Engineer('backend');
        $frontendEngineer = new \App\Composite\Open\Engineer('frontend');
        $leader->add($backendEngineer);
        $leader->add($frontendEngineer);
        $leader->remove($backendEngineer);


        $this->assertSame(
            sprintf('Leader:CTO' . PHP_EOL . 'Engineer:frontend' . PHP_EOL),
            $leader->display()
        );

        $leader->remove($frontendEngineer);

        $leader->setEmployees([$backendEngineer, $frontendEngineer]);

        $this->assertSame(
            sprintf('Leader:CTO' . PHP_EOL . 'Engineer:backend' . PHP_EOL . 'Engineer:frontend' . PHP_EOL),
            $leader->display()
        );

        $leader->getEmployees();
    }
}

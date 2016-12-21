<?php

namespace Valerian\Html\Test;

use Valerian\Html\Element;
use Valerian\Html\Form;
use Valerian\Html\HtmlInterface;

class FormTest extends \PHPUnit_Framework_TestCase
{
    public function testInstanceOf()
    {
        $this->assertInstanceOf(HtmlInterface::class, new Form('#'));
        $this->assertInstanceOf(Element::class, new Form('#'));
    }

    public function testResponse()
    {
        $this->assertEquals('<form action="#"></form>', (string) new Form('#'));
        $this->assertEquals('<form action="#" class="foo"></form>', (string) (new Form('#'))->attribute('class', 'foo'));
    }
}

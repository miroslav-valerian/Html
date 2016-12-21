<?php

namespace Valerian\Html\Test;

use Valerian\Html\EmptyElement;
use Valerian\Html\HtmlInterface;
use Valerian\Html\Input;

class InputTest extends \PHPUnit_Framework_TestCase
{
    public function testInstanceOf()
    {
        $this->assertInstanceOf(HtmlInterface::class, new Input('text', 'foo'));
        $this->assertInstanceOf(EmptyElement::class, new Input('GET', 'foo'));
    }

    public function testResponse()
    {
        $this->assertEquals('<input type="text" name="foo">', new Input('text', 'foo'));
        $this->assertEquals(
            '<input type="text" name="foo" class="bar">',
            (new Input('text', 'foo'))->attribute('class', 'bar')
        );
    }

    public function testSetters()
    {
        $this->assertEquals('<input type="text" name="foo" value="bar">', (new Input('text', 'foo'))->value('bar'));
    }
}

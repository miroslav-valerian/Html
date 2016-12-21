<?php

namespace Valerian\Html\Test;

use Valerian\Html\Element;
use Valerian\Html\Select;
use Valerian\Html\SelectOption;
use Valerian\Html\HtmlInterface;

class SelectTest extends \PHPUnit_Framework_TestCase
{
    public function testInstanceOf()
    {
        $this->assertInstanceOf(HtmlInterface::class, new Select('foo'));
        $this->assertInstanceOf(Element::class, new Select('foo'));
    }

    public function testResponse()
    {
        $this->assertEquals('<select name="foo"></select>', (string) new Select('foo'));
        $this->assertEquals(
            '<select name="foo" class="bar"></select>',
            (string) (new Select('foo', 'bar'))->attribute('class', 'bar')
        );
    }

    public function testSetters()
    {
        $this->assertEquals(
            '<select name="foo" size="2"></select>',
            (string) (new Select('foo'))->size(2)
        );
        $this->assertEquals(
            '<select name="foo" disabled="disabled"></select>',
            (string) (new Select('foo'))->disabled('disabled')
        );
    }
}

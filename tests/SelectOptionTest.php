<?php

namespace Valerian\Html\Test;

use Valerian\Html\Element;
use Valerian\Html\SelectOption;
use Valerian\Html\HtmlInterface;

class SelectOptionTest extends \PHPUnit_Framework_TestCase
{
    public function testInstanceOf()
    {
        $this->assertInstanceOf(HtmlInterface::class, new SelectOption('foo', 'bar'));
        $this->assertInstanceOf(Element::class, new SelectOption('foo', 'bar'));
    }

    public function testResponse()
    {
        $this->assertEquals('<option value="foo">bar</option>', (string) new SelectOption('foo', 'bar'));
        $this->assertEquals(
            '<option value="foo" class="foo">bar</option>',
            (string) (new SelectOption('foo', 'bar'))->attribute('class', 'foo')
        );
    }

    public function testSetters()
    {
        $this->assertEquals(
            '<option value="foo" selected="selected">bar</option>',
            (string) (new SelectOption('foo', 'bar'))->selected('selected')
        );
        $this->assertEquals(
            '<option value="foo" disabled="disabled">bar</option>',
            (string) (new SelectOption('foo', 'bar'))->disabled('disabled')
        );
    }
}

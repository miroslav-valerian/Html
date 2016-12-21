<?php

namespace Valerian\Html\Test;

use Valerian\Html\Element;
use Valerian\Html\HtmlInterface;
use Valerian\Html\Span;

class SpanTest extends \PHPUnit_Framework_TestCase
{
    public function testInstanceOf()
    {
        $this->assertInstanceOf(HtmlInterface::class, new Span());
        $this->assertInstanceOf(Element::class, new Span());
    }

    public function testResponse()
    {
        $this->assertEquals('<span></span>', (string) new Span());
        $this->assertEquals('<span class="foo"></span>', (string) (new Span())->attribute('class', 'foo'));
    }
}

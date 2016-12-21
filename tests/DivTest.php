<?php

namespace Valerian\Html\Test;

use Valerian\Html\Div;
use Valerian\Html\Element;
use Valerian\Html\HtmlInterface;

class DivTest extends \PHPUnit_Framework_TestCase
{
    public function testInstanceOf()
    {
        $this->assertInstanceOf(HtmlInterface::class, new Div());
        $this->assertInstanceOf(Element::class, new Div());
    }

    public function testResponse()
    {
        $this->assertEquals('<div></div>', (string) new Div());
        $this->assertEquals('<div class="foo"></div>', (string) (new Div())->attribute('class', 'foo'));
    }
}

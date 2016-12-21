<?php

namespace Valerian\Html\Test;

use Valerian\Html\Body;
use Valerian\Html\Element;
use Valerian\Html\HtmlInterface;

class BodyTest extends \PHPUnit_Framework_TestCase
{
    public function testInstanceOf()
    {
        $this->assertInstanceOf(HtmlInterface::class, new Body());
        $this->assertInstanceOf(Element::class, new Body());
    }

    public function testResponse()
    {
        $this->assertEquals('<body></body>', (string) new Body());
        $this->assertEquals('<body class="foo"></body>', (string) (new Body())->attribute('class', 'foo'));
    }
}

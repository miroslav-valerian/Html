<?php

namespace Valerian\Html\Test;

use Valerian\Html\Element;
use Valerian\Html\Html;
use Valerian\Html\HtmlInterface;

class HtmlTest extends \PHPUnit_Framework_TestCase
{
    public function testInstanceOf()
    {
        $this->assertInstanceOf(HtmlInterface::class, new Html());
        $this->assertInstanceOf(Element::class, new Html());
    }

    public function testResponse()
    {
        $this->assertEquals('<html></html>', (string) new Html());
        $this->assertEquals('<html class="foo"></html>', (string) (new Html())->attribute('class', 'foo'));
    }
}

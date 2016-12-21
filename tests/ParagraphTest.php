<?php

namespace Valerian\Html\Test;

use Valerian\Html\Paragraph;
use Valerian\Html\Element;
use Valerian\Html\HtmlInterface;

class ParagraphTest extends \PHPUnit_Framework_TestCase
{
    public function testInstanceOf()
    {
        $this->assertInstanceOf(HtmlInterface::class, new Paragraph());
        $this->assertInstanceOf(Element::class, new Paragraph());
    }

    public function testResponse()
    {
        $this->assertEquals('<p></p>', (string) new Paragraph());
        $this->assertEquals('<p class="foo"></p>', (string) (new Paragraph())->attribute('class', 'foo'));
    }
}

<?php

namespace Valerian\Html\Test;

use Valerian\Html\EmptyElement;
use Valerian\Html\HtmlInterface;
use Valerian\Html\Img;

class ImgTest extends \PHPUnit_Framework_TestCase
{
    public function testInstanceOf()
    {
        $this->assertInstanceOf(HtmlInterface::class, new Img('#'));
        $this->assertInstanceOf(EmptyElement::class, new Img('#'));
    }

    public function testResponse()
    {
        $this->assertEquals('<img src="#">', (string) new Img('#'));
        $this->assertEquals('<img src="#" class="foo">', (string) (new Img('#'))->attribute('class', 'foo'));
    }

    public function testSetters()
    {
        $this->assertEquals('<img src="#" alt="foo">', (string) (new Img('#'))->alt('foo'));
        $this->assertEquals('<img src="#" width="10">', (string) (new Img('#'))->width(10));
        $this->assertEquals('<img src="#" height="10">', (string) (new Img('#'))->height(10));
    }
}

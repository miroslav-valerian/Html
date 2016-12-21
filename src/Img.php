<?php

namespace Valerian\Html;

class Img extends EmptyElement
{
    /**
     * @var string
     */
    protected $elementName = 'img';

    /**
     * Img constructor.
     * @param string $src
     */
    public function __construct($src)
    {
        $this->src($src);
    }

    /**
     * @return string
     */
    public function getElementName()
    {
        return $this->elementName;
    }

    /**
     * @param string $src
     */
    public function src($src)
    {
        $this->attribute('src', $src);
        return $this;
    }

    /**
     * @param string $alt
     */
    public function alt($alt)
    {
        $this->attribute('alt', $alt);
        return $this;
    }

    /**
     * @param integer $height
     */
    public function height($height)
    {
        $this->attribute('height', (int) $height);
        return $this;
    }

    /**
     * @param integer $width
     */
    public function width($width)
    {
        $this->attribute('width', (int) $width);
        return $this;
    }
}

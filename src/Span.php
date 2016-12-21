<?php

namespace Valerian\Html;

class Span extends Element
{
    /**
     * @var string
     */
    protected $elementName = 'span';

    /**
     * @return string
     */
    public function getElementName()
    {
        return $this->elementName;
    }
}
<?php

namespace Valerian\Html;

class Div extends Element
{
    /**
     * @var string
     */
    protected $elementName = 'div';

    /**
     * @return string
     */
    public function getElementName()
    {
        return $this->elementName;
    }
}

<?php

namespace Valerian\Html;

class Html extends Element
{
    /**
     * @var string
     */
    protected $elementName = 'html';

    /**
     * @return string
     */
    public function getElementName()
    {
        return $this->elementName;
    }
}

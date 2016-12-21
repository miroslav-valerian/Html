<?php

namespace Valerian\Html;

class Paragraph extends Element
{
    /**
     * @var string
     */
    protected $elementName = 'p';

    /**
     * @return string
     */
    public function getElementName()
    {
        return $this->elementName;
    }
}

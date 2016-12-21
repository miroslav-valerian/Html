<?php

namespace Valerian\Html;

class Body extends Element
{
    /**
     * @var string
     */
    protected $elementName = 'body';

    /**
     * @return string
     */
    public function getElementName()
    {
        return $this->elementName;
    }

}

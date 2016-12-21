<?php

namespace Valerian\Html;

use Valerian\Html\Exception\HtmlException;

abstract class EmptyElement implements EmptyElementInterface
{
    /**
     * @var array
     */
    protected $attributes = [];

    /** @var string */
    protected $elementName;

    /**
     * @param $name
     * @param $value
     * @return $this
     */
    public function attribute($name, $value)
    {
        $this->attributes[$name] = $value;
        return $this;
    }

    /**
     * @return string
     * @throws HtmlException
     */
    public function getElementName()
    {
        if (!isset($this->elementName)) {
            throw new HtmlException('Element name must be set.');
        }
        return $this->elementName;
    }
    
    /**
     * @return string
     */
    public function render()
    {
        $attributes = null;
        foreach ($this->attributes as $name => $value) {
            $attributes .= ' '.$name.'="'.$value.'"';
        }

        return "<".$this->getElementName().$attributes.">";
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->render();
    }
}

<?php

namespace Valerian\Html;

use Valerian\Html\Exception\HtmlException;

class Select extends Element
{
    /**
     * @var SelectOption[]
     */
    private $options = [];

    /**
     * @var string
     */
    protected $elementName = 'select';

    /**
     * Select constructor.
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name($name);
    }

    /**
     * @return string
     */
    public function getElementName()
    {
        return $this->elementName;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function name($name)
    {
        $this->attribute('name', $name);
        return $this;
    }

    /**
     * @param string $disabled
     * @return $this
     */
    public function disabled($disabled)
    {
        $this->attribute('disabled', $disabled);
        return $this;
    }

    /**
     * @param integer $size
     * @return $this
     */
    public function size($size)
    {
        $this->attribute('size', (int) $size);
        return $this;
    }

    /**
     * @param SelectOption $option
     * @return $this
     */
    public function addOption(SelectOption $option)
    {
        $this->options[] = $option;
        return $this;
    }

    /**
     * @param HtmlInterface $child
     * @throws HtmlException
     */
    public function addChild(HtmlInterface $child)
    {
        throw new HtmlException('This tag not support child.');
    }

    /**
     * @return string
     */
    public function render()
    {
        $response = $this->renderStartTag();
        foreach ($this->options as $option) {
            $response .= $option->render();
        }
        $response .= $this->renderEndTag();
        return $response;
    }
}

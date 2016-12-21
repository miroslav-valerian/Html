<?php

namespace Valerian\Html;

use Valerian\Html\Exception\HtmlException;

class SelectOption extends Element
{
    /**
     * @var string
     */
    protected $elementName = 'option';

    /**
     * @var string
     */
    private $text;

    /**
     * SelectOption constructor.
     * @param string $value
     * @param string $text
     */
    public function __construct($value, $text)
    {
        $this->value($value);
        $this->text($text);
        return $this;
    }

    /**
     * @return string
     */
    public function getElementName()
    {
        return $this->elementName;
    }

    /**
     * @param string $text
     * @return $this
     */
    public function text($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function value($value)
    {
        $this->attribute('value', $value);
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
     * @param string $selected
     * @return $this
     */
    public function selected($selected)
    {
        $this->attribute('selected', $selected);
        return $this;
    }

    /**
     * @param HtmlInterface $child
     * @return $this
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
        $response .= $this->text;
        $response .= $this->renderEndTag();
        return $response;
    }
}

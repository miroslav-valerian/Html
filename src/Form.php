<?php

namespace Valerian\Html;

class Form extends Element
{
    protected $elementName = 'form';

    /**
     * @return string
     */
    public function getElementName()
    {
        return $this->elementName;
    }

    /**
     * Form constructor.
     * @param string $action
     */
    public function __construct($action)
    {
        $this->action($action);
    }

    /**
     * @param string $action
     * @return $this
     */
    public function action($action)
    {
        $this->attribute('action', $action);
        return $this;
    }

    /**
     * @param string $method
     * @return $this
     */
    public function method($method)
    {
        $this->attribute('method', $method);
        return $this;
    }
}
